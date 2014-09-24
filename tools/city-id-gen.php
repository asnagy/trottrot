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

$result = mysql_query('SELECT * FROM city');
while ($row = mysql_fetch_assoc($result)) {
    if ($row['country'] == 'United States') {
        $id = str_replace(' ', '_', $row['city'] . '-' . $row['region'] . '-' . $row['country']);
    } else {
        $id = str_replace(' ', '_', $row['city'] . '-' . $row['country']);
    }
    
    $sql = "UPDATE city SET id = '$id' WHERE id = '" . $row['id'] . "'";
    mysql_query($sql);
}
mysql_free_result($result);

mysql_close($conn);

echo 'Complete';
?>
