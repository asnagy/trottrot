<?php
require_once 'Action.php';
require_once 'lib/User.php';

class AccountLogout extends Action
{

    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        UserUtil::logout();
        
        require_once 'services/public/home.php';
        PublicHome::launch();
    }
    
}
?>
