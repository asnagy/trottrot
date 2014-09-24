<?php
require_once 'Action.php';
require_once 'lib/User.php';

require_once 'sys/FacebookUtil.php';

// Setup for Instagram
set_include_path('sys/ZendFramework-1.12.7/library/'.get_include_path());
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Http_Client');

class AccountProfile extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        global $configArray;
        global $user;

        // Instagram API Access
        $CLIENT_ID = '7a9d6cf71df04a27b90cdb4a08315c0b';
        $CLIENT_SECRET = 'e6b37c6847834772b37f7b07043f107f';

        // Get Instagram Account
        if ($user->instagram_id != '') {
            $client = new Zend_Http_Client('https://api.instagram.com/v1/users/' . $user->instagram_id);
            $client->setParameterGet('client_id', $CLIENT_ID);
            $response = $client->request();
            $instaUser = json_decode($response->getBody());
            $interface->assign('instagramThumbnail', $instaUser->data[0]->profile_picture);
            $interface->assign('instagramName', $instaUser->data[0]->full_name);
        }

        // Process File Upload for Profile Picture
        if (isset($_FILES['profile_photo']['error']) && !is_array($_FILES['profile_photo']['error'])) {
            $interface->assign('updateStatus', 0);            
            if ($_FILES['upfile']['error'] == UPLOAD_ERR_OK) {
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $ext = array_search($finfo->file($_FILES['profile_photo']['tmp_name']),
                                    array('jpg' => 'image/jpeg',
                                          'png' => 'image/png',
                                          'gif' => 'image/gif'),
                                    true);
                if ($ext) {
                    move_uploaded_file($_FILES['profile_photo']['tmp_name'],
                                       sprintf($configArray['Site']['photos'] . '/avatar/%s.%s',
                                               $user->id, $ext));
                    $interface->assign('updateStatus', 1);
                                               
                }
            }
        }
        
        // Process Saving
        if (isset($_POST['fname'])) { 
            $user = UserUtil::isLoggedIn();
            $user->fname = trim($_POST['fname']);
            $user->lname = trim($_POST['lname']);
            $user->email = trim($_POST['email']);
            $user->nickname = trim($_POST['nickname']);
            $user->airport = trim($_POST['airport']);
            $user->hometown = trim($_POST['hometown']);
            if ($_POST['instagram'] != '') {
                $client = new Zend_Http_Client('https://api.instagram.com/v1/users/search');
                $client->setParameterGet('q', $_POST['instagram']);
                $client->setParameterGet('client_id', $CLIENT_ID);
                $response = $client->request();
                $instaUser = json_decode($response->getBody());

                $user->instagram_id = $instaUser->data[0]->id;
            }
            if ((isset($_POST['fname']) && (trim($_POST['fname']) != '')) && 
                (isset($_POST['lname']) && (trim($_POST['lname']) != '')) &&
                (isset($_POST['email']) && (trim($_POST['email']) != ''))) {
                $user->update();
                setcookie('userinfo', serialize($user), time()+3600, $configArray['Site']['path']);
                $_COOKIE['userinfo'] = serialize($user);                
                $interface->assign('updateStatus', 1);
            } else {
                $interface->assign('updateStatus', 0);            
            }
            
            $interface->assign('user', $user);
        }
        
        $interface->assign('friendList', FacebookUtil::getFriends());

        $interface->setTemplate('profile.tpl');
        $interface->display('layout-auth.tpl');
    }
    
}
?>