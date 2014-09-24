<?php
require_once 'Action.php';

class DestinationAdvanced extends Action {
    
    function launch()
    {
        global $interface;

        $interface->setPageTitle('Advanced Search');
        $interface->setTemplate('advanced.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }        
    }
}

?>
