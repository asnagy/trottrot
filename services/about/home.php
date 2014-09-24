<?php
require_once 'Action.php';

class AboutHome extends Action {
    
    function __construct()
    {
    }

    function launch()
    {
        global $interface;

        $interface->setPageTitle('TrotTrot');
        
        $interface->setTemplate('home.tpl');
            
        $interface->display('layout-public.tpl');
    }
}

?>
