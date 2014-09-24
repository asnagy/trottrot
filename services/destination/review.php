<?php
require_once 'Action.php';
require_once 'lib/City.php';

class DestinationReview extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        
        $city = new DataObject_City();
        $destination = explode(', ', $_POST['destination']);
        $city->city = $destination[0];
        $city->country = $destination[1];
        if ($city->find()) {
            $city->fetch();
            $interface->assign('city', $city);
        }

        if (file_exists('photos/cities/banner/' . $_POST['id'] . '.jpg')) {
            $interface->assign('bgimage', '/photos/cities/banner/' . $_POST['id'] . '.jpg');
        } else {
            $interface->assign('bgimage', '/photos/cities/banner/default.jpg');
        }
        
        $interface->setTemplate('review.tpl');
        $interface->display('layout-auth.tpl');
    }
    
}
?>
