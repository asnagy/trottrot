<?php
//ini_set('memory_limit', '4096M');
ini_set('auto_detect_line_endings',TRUE);

$dbserver = '127.0.0.1';
$dbuser = 'root';
$dbname = 'travel';

$conn = mysql_connect($dbserver, $dbuser);
if (!$conn) {
     die("Connect Failed: " . mysql_error());
}
if (!mysql_select_db($dbname)) {
     die("Database Failed: " . mysql_error());
}

$xmlFile = '/Users/ANagy/Downloads/enwikivoyage-20140725-pages-meta-current.xml';

$dom = new DOMDocument;
$dom->load($xmlFile);
if (!$dom) {
    die('Error while parsing the document');
}
$destinations = simplexml_import_dom($dom);

foreach ($destinations->page as $article) {
    if ((!$article->redirect) && 
        (!strpos($article->title, '(disambiguation)')) &&
        (substr($article->title, 0, 4) != 'User') &&
        (substr($article->title, 0, 8) != 'Category') &&
        (substr($article->title, 0, 10) != 'Wikivoyage') &&
        (trim($article->revision->text) != '')) {

        // Article Title
        $title = mysql_real_escape_string($article->title);

        // Article Abstract
        $abstract = substr($article->revision->text, 0, strpos($article->revision->text, '==')); // Get opening paragraph
        //preg_match('/\{\{pagebanner|([^\|]+)\|([^\}]+)\}\}/i', $abstract, $banner);
        $abstract = preg_replace('/\{\{([^\}]+)\}\}/', '', $abstract); // Strip {{*}}
        $abstract = preg_replace('/:\s"([^"]+)"/i', '', $abstract);
        $abstract = preg_replace('/:"([^"]+)"/i', '', $abstract);
        $abstract = preg_replace('/\[\[Image:([^\]]+)\]\]/i', '', $abstract); // Strip [[Image:*]]
        $abstract = preg_replace('/\[file:([^\]]+)\]/i', '', $abstract); // Strip [File:*]
        $abstract = preg_replace('/\[http:([^\s]+)\s([^\]]+)\]/i', '$2', $abstract);
        $abstract = preg_replace('/\[https:([^\s]+)\s([^\]]+)\]/i', '$2', $abstract);        
        $abstract = str_replace(array('\n\n', '\n', "\n"), ' ', $abstract);
        $abstract = str_replace(array("'''", '[[', ']]', '[]', '__NOTOC__', '__TOC__'), '', $abstract);
        $abstract = strip_tags($abstract);
        $abstract = stripslashes($abstract);
        $abstract = mysql_real_escape_string(trim($abstract));

        // Banner Image
        /*
        if (is_array($banner)) {
            $url = $banner[1];
        
            $path_parts = pathinfo($banner[1]);
            $ext = strtolower($path_parts["extension"]);                
            
            $fullpath = '../photos/cities/' . $article->title . ".$ext";
            if ($fp = fopen ($fullPath, 'w+')) {
                $curl = curl_init(str_replace(' ', '%20', $url));
                curl_setopt($curl, CURLOPT_TIMEOUT, 50);
                curl_setopt($curl, CURLOPT_FILE, $fp); // write curl response to file
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                curl_exec($curl); // get curl response
                curl_close($curl);
                fclose($fp);        
            }
        }
        */

        // Article Full Text
        //$text = mysql_real_escape_string($article->revision->text);
        
        // Article Last update
        $lastupdate = mysql_real_escape_string($article->revision->timestamp);
        
        // Location Lat & Long
        $latitude = '';
        $longitude = '';
        if (preg_match('/\{\{geo\|([0-9\-\.]+)\|([0-9\-\.]+)/', $article->revision->text, $geo)) {
            $latitude = mysql_real_escape_string($geo[1]);
            $longitude = mysql_real_escape_string($geo[2]);
        }
 
        if (($latitude != '') && ($longitude != '') && ($abstract != '')) {
            $sql = "insert into destination (title, last_update, abstract, latitude, longitude) ";
            $sql .= "values('$title', '$lastupdate', '$abstract', '$latitude', '$longitude')"; 
            mysql_query($sql);
            if(mysql_error()) {
                echo mysql_error();
                echo "\n$sql";
                die();
            }
        }
    }
}

mysql_close($conn);

echo "Complete\n";
?>