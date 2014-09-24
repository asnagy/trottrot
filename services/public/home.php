<?php
require_once 'Action.php';

require_once 'lib/Visit.php';

class PublicHome extends Action {
    
    function __construct()
    {
    }

    function launch()
    {
        global $interface;

        $interface->setPageTitle('TrotTrot');
        
        $trending = DataObject_Visit::getTrending(10);
        $interface->assign('trending', $trending);
        
        $interface->assign('module', 'public');
        $interface->setTemplate('home.tpl');
            
        $interface->display('layout-public.tpl');
    }
}

?>
