<?php
require_once 'Action.php';
require_once 'lib/User.php';

require_once 'sys/FacebookUtil.php';

class AccountRequests extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        global $user;
 
        $interface->assign('list', $user->getFriendRequests());
        
        $interface->assign('friendList', FacebookUtil::getFriends());
        
        $interface->setTemplate('requests.tpl');        
        $interface->display('layout-auth.tpl');
    }
    
}
?>