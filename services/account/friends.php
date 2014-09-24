<?php
require_once 'Action.php';
require_once 'lib/User.php';

require_once 'sys/FacebookUtil.php';

class AccountFriends extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        global $user;
 
        $interface->assign('friendList', $user->getFriends());

        $interface->assign('friendRequests', $user->getFriendRequests());
        
        $interface->assign('facebookList', FacebookUtil::getFriends());
        
        $interface->setTemplate('friends.tpl');        
        $interface->display('layout-auth.tpl');
    }
    
}
?>