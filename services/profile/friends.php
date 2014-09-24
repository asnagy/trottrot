<?php
require_once 'Action.php';
require_once 'lib/User.php';

class ProfileFriends extends Action {
    
    function launch()
    {
        global $interface;
        global $user;

        // Get user details to display
        $profileUser = $user;
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $profileUser = new DataObject_User();
            $profileUser->id = $_GET['id'];
            if ($profileUser->find()) {
                $profileUser->fetch();
            } else {
                PEAR::raiseError('Invalid User!');
            }
        } elseif (!$user) {
            if (!($user = UserUtil::isLoggedIn())) {
                require_once 'services/public/home.php';
                PublicHome::launch();
                exit();
            }
        }
        $interface->assign('profileUser', $profileUser);

        // Get Itinerary Count
        $interface->assign('itinCount', $profileUser->getItineraryCount());

        // Get Friends
        if ($friendList = $profileUser->getFriends()) {
            $interface->assign('friendList', $friendList);
        }

        $interface->setTemplate('friends.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
