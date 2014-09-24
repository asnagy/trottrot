<?php
require_once 'lib/User.php';

class UserUtil
{

    function __construct()
    {
    }

    //Checks whether the user is logged in
    function isLoggedIn()
    {
        global $configArray;

        if (isset($_COOKIE['userinfo'])) {
            return unserialize($_COOKIE['userinfo']);
        } else {
            return false;
        }
    }

    function login($email, $password)
    {
        $user = new DataObject_User();
        $user->email = $email;
        if ($user->setPassword($password)) {
            if ($user->find()) {
                return $user->fetch();
            }
        }

        return new PEAR_Error('Invalid Login');
    }

    function logout()
    {
        global $configArray;

        if (isset($_COOKIE['userinfo'])) {
            setcookie('userinfo', '', time()-3600, $configArray['Site']['path']);
            $_COOKIE['userinfo'] = '';
        } else {
            return false;
        }
    }

    function requireLogin()
    {
        if (!UserUtil::isLoggedIn()) {
            require_once 'services/account/login.php';
            AccountLogin::launch();
            exit();
        }
    }

}
?>
