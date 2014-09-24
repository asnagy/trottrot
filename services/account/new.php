<?php
require_once 'Action.php';
require_once 'lib/User.php';

class AccountNew extends Action {
    
    function launch()
    {
        global $interface;

        if (isset($_POST['email'])) {
            $user = new DataObject_User();
            if ($user->setEmail($_POST['email'])) {
                if (!$user->find()) {
                    $user->id = md5(uniqid(rand(),1));
                    $user->fname = $_POST['fname'];
                    $user->lname = $_POST['lname'];
                    if ($_POST['beta'] == '55555') {
                        if ($user->setPassword($_POST['password'])) {
                            $user->insert();
                            $interface->setTemplate('welcome.tpl');
                        } else {
                            $interface->assign('failed', 'password');
                            $interface->assign('user', $user);
                            $interface->setTemplate('new.tpl');
                        }
                    } else {
                        $interface->assign('failed', 'beta');
                        $interface->assign('user', $user);
                        $interface->setTemplate('new.tpl');
                    }
                } else {
                    $interface->assign('failed', 'email_exist');
                    $interface->assign('user', $user);
                    $interface->setTemplate('new.tpl');
                }
            } else {
                $user->email = $_POST['email'];
                $interface->assign('failed', 'email_invalid');
                $interface->assign('user', $user);
                $interface->setTemplate('new.tpl');
            }
        } else {
            $interface->setTemplate('new.tpl');        
        }

        $interface->display('layout-public.tpl');
    }
    
}
?>
