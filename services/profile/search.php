<?php
require_once 'Action.php';
require_once 'lib/User.php';

class ProfileSearch extends Action {
    
    function launch()
    {
        global $interface;
        
        $list = array();
        $user = new DataObject_User();
        $nameParts = explode(' ', $_POST['q']);
        if (count($nameParts)) {
            $user->whereAdd("fname LIKE '" . $nameParts[0] . "%'");
            $user->whereAdd("lname LIKE '%" . $nameParts[count($nameParts)-1] . "'", 'OR');
            if ($user->find()) {
                while ($user->fetch()) {
                    $list[] = clone($user);
                }
            }
            $interface->assign('userList', $list);
        }

        $interface->setTemplate('search.tpl');
        
        if (UserUtil::isLoggedIn()) {
            $interface->display('layout-auth.tpl');
        } else {
            $interface->display('layout-public.tpl');
        }
    }
    
}
?>
