<?php
require_once 'Action.php';
require_once 'lib/City.php';

class AjaxBeenthere extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $user;
        
        header('Content-type: application/json');

        $result = array();

        if (isset($_POST['id']) && ($_POST['id'] != '')) {
            $city = new DataObject_City();
            $city->id = $_POST['id'];
            if ($user->addVisit($city)) {
                $result['status'] = 'success';  
            } else {
                $result['status'] = 'error';  
            }
        }

        echo json_encode($result);
    }
    
}
?>
