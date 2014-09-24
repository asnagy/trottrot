<?php
require_once 'Action.php';
require_once 'lib/Itinerary.php';
require_once 'lib/City.php';

class ItineraryNew extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        
        $interface->setTemplate('new.tpl');
        $interface->display('layout-auth.tpl');
    }
    
}
?>
