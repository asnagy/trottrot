<?php
require_once 'Action.php';
require_once 'lib/User.php';

class ProfileHome extends Action {
    
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
                die('Invalid User!');
            }
        } elseif (!$user) {
            if (!($user = UserUtil::isLoggedIn())) {
                require_once 'services/public/home.php';
                PublicHome::launch();
                exit();
            }
        }
        $interface->assign('profileUser', $profileUser);

        // Get Friends
        if ($friendList = $profileUser->getFriends()) {
            $interface->assign('friendList', $friendList);
        }

        // Get Friends
        $interface->assign('itinCount', $profileUser->getItineraryCount());
        
        // Get Visits
        if ($visitList = $profileUser->getVisits()) {
            $interface->assign('visitList', $visitList);
        
            // Get dedupped country list
            foreach ($visitList as $visit) {
                $countryList[$visit->country] = 1;
            }
            $countryList = array_keys($countryList);
            $interface->assign('countryList', $countryList);
        }

        $interface->setTemplate('home.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
