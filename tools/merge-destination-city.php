<?php

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

echo "Start\n";

//$result = mysql_query('SELECT * FROM city');
$result = mysql_query('SELECT * FROM city WHERE abstract IS NULL');
while ($row = mysql_fetch_assoc($result)) {
    //if (preg_match('/\s\(([^\)]+)\)/i', $row['city'], $matches)) {
    if ($row['country'] == 'United States') {
        // For cities in the US, ensure a match on the state.
        $city = $row['city'] . ' (' . $row['region'] . ')';
        $sql = "SELECT abstract FROM destination WHERE title = '$city'";
    } else {
        // For international cities, ensure a match on the latitude and longitude.
        $sql = "SELECT abstract FROM destination WHERE title = '" . $row['city'] . "' AND " . 
               "FLOOR(latitude) = '" . (int)$row['latitude'] . "' AND " . 
               "FLOOR(longitude) = '" . (int)$row['longitude'] . "'";
    }
    $result2 = mysql_query($sql);
    if ($result2) {
        if ($row2 = mysql_fetch_assoc($result2)) {
            $sql = "UPDATE city SET abstract = '" . mysql_real_escape_string($row2['abstract']) . "' WHERE id = '" . $row['id'] . "'";
            echo "$sql\n\n";
            mysql_query($sql);
        }
        mysql_free_result($result2);
    } else {
        // For failed matches, try a looser match
        // This may result in false positives
        $sql = "SELECT abstract FROM destination WHERE title = '" . $row['city'] . "'";
        $result2 = mysql_query($sql);
        if ($result2) {
            if ($row2 = mysql_fetch_assoc($result2)) {
                $sql= "UPDATE city SET abstract = '" . mysql_real_escape_string($row2['abstract']) . "' WHERE id = '" . $row['id'] . "'";
                echo "$sql\n\n";
                mysql_query($sql);
            }
            mysql_free_result($result2);
        }
    }
    
}
mysql_free_result($result);

// Closing connection
mysql_close($conn);

echo "Complete\n";
?>
