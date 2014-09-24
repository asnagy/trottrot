<?php
require_once 'Action.php';
require_once 'lib/User.php';
require_once 'lib/Itinerary.php';

class ProfileItineraries extends Action {
    
    function launch()
    {
        global $interface;
        global $user;

        // Create new itinerary
        if (isset($_POST['itineraryTitle']) && $user) {
            $itin = new DataObject_Itinerary();
            $itin->user_id = $user->id;
            $itin->title = $_POST['itineraryTitle'];
            $itin->private = ($_POST['shared'] == 'true') ? 0 : 1;
            $itin->insert();
            
            for ($i=0; $i<count($_POST['hiddenId']); $i++) {
                if ($_POST['hiddenId'][$i] != '') {
                    $visit = new DataObject_Visit();
                    $visit->user_id = $user->id;                
                    $visit->city_id = $_POST['hiddenId'][$i];
                    $visit->startdate = $_POST['startDate'][$i];
                    $visit->enddate = $_POST['endDate'][$i];
                    $itin->addVisit($visit);
                }
            }    
        }

        // Get user details to display
        $profileUser = $user;
        if (isset($_GET['id']) && ($_GET['id'] != '') && ($_GET['id'] != 'itineraries')) {
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

        // Get Itineraries
        if ($itinList = $profileUser->getItineraries()) {
            $interface->assign('itinList', $itinList);
        }

        $interface->setTemplate('itineraries.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>