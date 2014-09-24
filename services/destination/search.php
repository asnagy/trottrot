<?php
require_once 'Action.php';
//require_once 'lib/Destination.php';
require_once 'lib/City.php';

class DestinationSearch extends Action {
    
    function launch()
    {
        global $interface;

        $interface->assign('query', $_GET['q']);

        if (isset($_GET['pg'])) {
            $start = ((int)$_GET['pg'] - 1) * 10;
            $limit = 10 * (int)$_GET['pg'];
            $interface->assign('nextPg', (int)$_GET['pg'] + 1);
        } else {
            $start = 0;
            $limit = 10;
            $interface->assign('nextPg', 2);
        }

        $city = new DataObject_City();
        $city->whereAdd("city LIKE '" . $_GET['q'] . "%'");
        $city->whereAdd("country LIKE '" . $_GET['q'] . "%'", 'OR');
        $city->orderBy('population DESC');
        $city->limit($start, $limit);
        if ($city->find()) {
            $list = array();
            while ($city->fetch()) {
                $list[] = clone($city);
            }
            $interface->assign('list', $list);
        }

        $interface->setPageTitle('Search');
        $interface->setTemplate('search.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }        
    }
}

?>
