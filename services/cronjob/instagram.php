<?php
require_once 'Action.php';
require_once 'lib/City.php';

require_once 'Mail.php';
require_once 'Mail/mime.php';

class CronjobInstagram extends Action {
    
    function launch()
    {
        global $interface;

        set_include_path('sys/ZendFramework-1.12.7/library/'.get_include_path());

        // Use Zend's HTTP Client Library for talking to Instragram
        require_once 'Zend/Loader.php';
        Zend_Loader::loadClass('Zend_Http_Client');

        // define consumer key and secret
        // available from Instagram API console
        $CLIENT_ID = '7a9d6cf71df04a27b90cdb4a08315c0b';
        $CLIENT_SECRET = 'e6b37c6847834772b37f7b07043f107f';

        $user = new DataObject_User();
        $user->subscribed = 1;
        $user->whereAdd('instagram_id IS NOT NULL');
        if ($user->find()) {
            while ($user->fetch()) {
        
            // Retrieve recent posts for user
            //$client = new Zend_Http_Client('https://api.instagram.com/v1/users/' . $user->instagram_id . '/media/recent');
            $client = new Zend_Http_Client('https://api.instagram.com/v1/users/5409506/media/recent');
            $client->setParameterGet('client_id', $CLIENT_ID);
            $response = $client->request();
            $result = json_decode($response->getBody());

            // Go on to next user
            if (!count($result->data)) {
                echo $user->email . ": Skipped\n";            
                continue;
            }
            
            $city = new DataObject_City();
            $list = array();
            foreach ($result->data as $post) {
                if ($post->location != '') {
                    // Go 2 decimal places for accuracy
                    $lat = round($post->location->latitude, 2);
                    $long = round($post->location->longitude, 2);
                    $city->whereAdd("(ROUND(latitude,2) = $lat AND ROUND(longitude,2) = $long)", 'OR');
                }
            }
            if ($city->find()) {
                while ($city->fetch()) {
                    $list[$city->city] = array('visited' => $post->created_time, 'city' => clone($city));
                }
            }

            $interface->assign('cityList', $list);

            $interface->setTemplate('instagram.tpl');
            $html = $interface->fetch('layout-email.tpl');
            
            $headers['From'] = 'no-reply@trottrot.com';
            $headers['To'] = $user->email;
            $headers['Subject'] = 'TrotTrot - Review your recent travel';

            $mime = new Mail_mime(array('eol' => $crlf));
            $mime->setHTMLBody($html);
        
            $body = $mime->get();
            $headers = $mime->headers($headers);

            // Create the mail object using the Mail::factory method
            $mail_object =& Mail::factory('sendmail');
            $result = $mail_object->send($user->email, $headers, $body);

            echo $body;
            
            if (PEAR::isError($result)) {
                echo $user->email . ": Failed\n";
            }
            }
        }
    }
    
}
?>