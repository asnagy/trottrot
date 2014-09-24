<?php
require_once 'Action.php';
require_once 'lib/City.php';

class DestinationHome extends Action {
    
    function launch()
    {
        global $interface;
        global $user;
        
        // Fetch City Details
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
            
            $interface->setTemplate('home.tpl');
        } else {
            PEAR::raiseError('Unknown City');
        }
        
        // Set Page Title
        if ($city->country == 'United States') {
            $interface->setPageTitle("$city->city, $city->region");
        } else {
            $interface->setPageTitle("$city->city, $city->country");
        }
        
        // Get Itineraries
        $itinList = $city->getItineraries();
        $interface->assign('itineraryList', $itinList);
        
        // Display page
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
