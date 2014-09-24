<?php
require_once 'Action.php';
require_once 'lib/City.php';

class DestinationHome extends Action {
    
    function launch()
    {
        global $interface;
        global $user;
        
        $city = new DataObject_City();
        $name = explode('-', $_GET['id']);

        if (count($name) == 3) {
            $city->city = str_replace('_', ' ', $name[0]);
            $city->region = str_replace('_', ' ', $name[1]);
            $city->country = str_replace('_', ' ', $name[2]);
        } elseif (count($name) == 2) {
            $city->city = str_replace('_', ' ', $name[0]);
            $city->country = str_replace('_', ' ', $name[1]);
        }

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
        }
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
