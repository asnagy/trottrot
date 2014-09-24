<?php
require_once 'Mail.php';
require_once 'Mail/mime.php';

class MailUtil
{

    function __construct()
    {
    }

    function alertFriendRequest($initiator, $recipient)
    {
        $mailer =& Mail::factory('sendmail', $params);
        
        $headers['From']    = 'TrotTrot <noreply@trottrot.com>';
        $headers['To']      = $recipient->email;
        $headers['Subject'] = $initiator->fname . ' ' . $initiator->lname . ' would like to connect';

        $html = 'Go to http://trottrot.com/account/requests to see your pending requests';
        
        $mime = new Mail_mime(array('eol' => $crlf));
        $mime->setHTMLBody($html);
        
        $body = $mime->get();
        $headers = $mime->headers($headers);

        $mailer->send($recipient->email, $headers, $body);
    }

}
?>
