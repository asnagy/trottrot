<?php
require_once('sys/Facebook/facebook.php');

class FacebookUtil
{

    function __construct()
    {
    }

    //Checks whether the user is logged in
    function isLoggedIn()
    {
        global $configArray;
    
        $facebook = new Facebook(array('appId'  => '263579310497311',
                                       'secret' => '326a2170c5921e00291b52a8677740c1'));

        // See if there is a user from a cookie
        if ($facebook->getUser()) {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $fbuser = $facebook->api('/me');
                $user = new DataObject_User();
                $user->email = $fbuser['email'];
                if ($user->find()) {
                    $user->fetch();
                    return clone($user);
                } else {
                    // Create New User
                    $user->id = md5(uniqid(rand(),1));
                    $user->fname = $fbuser['first_name'];
                    $user->lname = $fbuser['last_name'];
                    $user->email_verified = 1;
                    $user->facebook_id = $fbuser['id'];
                    $user->insert();

                    // Get User Photo
                    $curl = curl_init('https://graph.facebook.com/'.$fbuser['id'].'/picture?type=large');
                    curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => true, CURLOPT_FOLLOWLOCATION => true));
                    $img = curl_exec($curl);
                    curl_close($curl);
                    $file = $configArray['Site']['photos'].'/avatar/'.$user->id.'.jpg';
                    file_put_contents($file, $img);
                    
                    return $user;
                }
            } catch (FacebookApiException $e) {
                return new PEAR_Error($e->getMessage());
            }
        } else {
            return new PEAR_Error('Unknown Facebook User');
        } 
    }
    
    function getFriends()
    {
        $list = array();

        // Get friends from Facebook
        $facebook = new Facebook(array('appId'  => '263579310497311',
                                       'secret' => '326a2170c5921e00291b52a8677740c1'));
        $user = $facebook->getUser();
        if ($user) {
            try {
                // Proceed knowing you have a logged in user who's authenticated.
                $friendList = $facebook->api('/me/friends');
                $facebookIDs = array();
                $friend = new DataObject_User();
                foreach ($friendList['data'] as $facebookUser) {
                    $list['invites'][] = $facebookUser;
                    $facebookIDs[] = $facebookUser['id'];
                    $friend->whereAdd("facebook_id = '" . $facebookUser['id'] . "'", 'OR');
                }
                if ($friend->find()) {
                    while ($friend->fetch()) {
                        $list['friends'][$friend->id] = clone($friend);
                    }                    
                    // Remove existing friends from the invite list
                    //$inviteList = array_diff($facebookIDs, array_keys($list['friends']));
                    //$list['invites'] = $inviteList;
                }
            } catch (FacebookApiException $e) {
                PEAR::raiseError($e);
            } 
        }
        
        return $list;
    }

}
?>
