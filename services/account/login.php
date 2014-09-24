<?php
require_once 'Action.php';
require_once 'lib/User.php';

class AccountLogin extends Action {
    
    function launch($error = null)
    {
        global $interface;

        if ($error) {
            $interface->assign('loginFailure', true);
        }
        $interface->assign('module', 'account');
        $interface->assign('action', 'login');
        $interface->setTemplate('login.tpl');
        $interface->display('layout-public.tpl');
    }
    
}
?>
