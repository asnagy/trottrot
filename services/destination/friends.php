<?php
require_once 'Action.php';
require_once 'lib/City.php';

class DestinationFriends extends Action {
    
    function launch()
    {
        global $interface;
        global $user;
        
        $city = new DataObject_City();
        $city->id = $_GET['id'];
        if ($city->find()) {
            $city->fetch();
            $interface->assign('city', $city);
            $interface->assign('id', $_GET['id']);
            
            if (file_exists('photos/cities/banner/' . $_GET['id'] . '.jpg')) {
                $interface->assign('bgimage', '/photos/cities/banner/' . $_GET['id'] . '.jpg');
            } else {
                $interface->assign('bgimage', '/photos/cities/banner/default.jpg');
            }
            
            $friendList = $city->getFriends($user);
            $interface->assign('friendList', $friendList);
            
            $interface->setTemplate('friends.tpl');
        } else {
            PEAR::raiseError('Unknown City');
        }
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
