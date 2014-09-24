<?php
require_once 'Action.php';

class AjaxFollow extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $user;
        
        header('Content-type: application/json');

        $result = array('status' => 'error');  

        if (isset($_POST['id']) && ($_POST['id'] != '')) {
            $friend = new DataObject_User();
            $friend->id = $_POST['id'];
            if ($friend->find()) {
                $friend->fetch();
                if ($user->addFriendRequest($friend)) {
                    $result['status'] = 'success';  
                } else {
                    $result['status'] = 'error';  
                }
            }
        }

        echo json_encode($result);
    }
    
}
?>
