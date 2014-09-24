<?php
/** CORE APPLICATION CONTOLLER **/
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

// Require System Libraries
require_once 'PEAR.php';
require_once 'sys/UserUtil.php';
require_once 'sys/Interface.php';
require_once 'sys/Translator.php';

// Sets global error handler for PEAR errors
PEAR::setErrorHandling(PEAR_ERROR_CALLBACK, 'handlePEARError');

// Sets global error handler for PHP errors
//set_error_handler('handlePHPError');

// Retrieve values from configuration file
$configArray = parse_ini_file('conf/config.ini', true);

// Start Interface
$interface = new UInterface();

// Check system availability
if (!$configArray['System']['available']) {
    $interface->display('unavailable.tpl');
    exit();
}

// Setup Translator
if (isset($_POST['mylang'])) {
    $language = $_POST['mylang'];
    setcookie('language', $language);
} else {
    $language = (isset($_COOKIE['language'])) ? $_COOKIE['language'] :
                    $configArray['Site']['language'];
}
$translator = new I18N_Translator('lang', $language);
$interface->assign('language', $language);

// Setup Local Database Connection
define('DB_DATAOBJECT_NO_OVERLOAD', 0);
$options =& PEAR::getStaticProperty('DB_DataObject', 'options');
$options = $configArray['DB_DataObject'];

// Define default Module and Action
$module = (isset($_GET['module'])) ? $_GET['module'] : 'public';
$action = (isset($_GET['action'])) ? $_GET['action'] : 'home';

// Process Authentication
$user = UserUtil::isLoggedIn();
if ($user) {
    setcookie('userinfo', serialize($user), time()+3600, $configArray['Site']['path']);
    $_COOKIE['userinfo'] = serialize($user);
    $interface->assign('user', $user);
    $module = (isset($_GET['module'])) ? $_GET['module'] : 'feed';
} elseif (isset($_POST['email']) && isset($_POST['password'])) {
    $user = UserUtil::login($_POST['email'], $_POST['password']);
    if (PEAR::isError($user)) {
        $module = 'account';
        $action = 'login';
        $interface->assign('result', $user);
    } else {
        setcookie('userinfo', serialize($user), time()+3600, $configArray['Site']['path']);
        $_COOKIE['userinfo'] = serialize($user);
        $interface->assign('user', $user);
        $module = (isset($_GET['module'])) ? $_GET['module'] : 'feed';        
    }
} else {
    // Check Facebook
    require_once 'sys/FacebookUtil.php';
    if (!PEAR::isError($user = FacebookUtil::isloggedIn())) {
        setcookie('userinfo', serialize($user), time()+3600, $configArray['Site']['path']);
        $_COOKIE['userinfo'] = serialize($user);
        $interface->assign('user', $user);
        $module = (isset($_GET['module'])) ? $_GET['module'] : 'feed';
    } else {
        // User is not logged in.  Force them to public.
        $module = 'public';
    }
}

$interface->assign('module', $module);
$interface->assign('action', $action);

// Call Action
if (is_readable("services/$module/$action.php")) {
    require_once "services/$module/$action.php";
    $action = ucfirst($module) . ucfirst($action);
    if (class_exists($action)) {
        $service = new $action();
        $service->launch();
    } else {
        PEAR::raiseError(new PEAR_Error('Unknown Action'));
    }
} else {
    if (is_dir("services/$module")) {
        require_once "services/$module/home.php";
        $action = ucfirst($module) . 'Home';
        if (class_exists($action)) {
            $service = new $action();
            $service->launch();
        } else {
            PEAR::RaiseError(new PEAR_Error('Cannot Load Action'));
        }
    } else {
        PEAR::RaiseError(new PEAR_Error('Cannot Load Action'));
    }
}

// Process any errors that are thrown
function handlePEARError($error, $method = null)
{
    $interface = new UInterface();

    $interface->assign('error', $error);

    $interface->setTemplate('error');
    
    $stackTrace = '';
    foreach ($error->backtrace as $trace) {
        $stackTrace .= '[' . $trace['line'] . '] ' . $trace['file'] . '<br>';
    }
    $interface->assign('stackTrace', $stackTrace);

    if (UserUtil::isLoggedIn()) {
        $interface->display('layout-auth.tpl');
    } else {
        $interface->display('layout-public.tpl');
    }

    exit();
}

?>