<?php
require_once 'Action.php';
require_once 'lib/User.php';

class AccountSettings extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        global $configArray;
        global $user;

        // Process Saving
        if (isset($_POST['profile_status'])) { 
            $user = UserUtil::isLoggedIn();
            $user->status = $_POST['profile_status'];
            $user->update();
            $interface->assign('user', $user);
        }

        $interface->setTemplate('settings.tpl');
        $interface->display('layout-auth.tpl');
    }
    
}
?>
