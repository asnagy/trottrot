<?php
ini_set('auto_detect_line_endings',TRUE);

include 'states.php';
include 'countries.php';

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


if (($handle = fopen('/Users/ANagy/Downloads/worldcitiespop.txt', 'r')) !== false) {
    echo "Start\n";
    while (($line = fgets($handle)) !== false) {  
        // Remove unnecessary whitespace from the record
        $line = trim($line); 
	  
        // Break up comma delimited line
        // Field order: Country, Ascii City, City, Region, Population, Latitude, Longitude
        $line = explode(',', $line); 

        // Skip unknown cities and small populations except anything in the US
        if (($line[0] == 'us') || ((int)$line[4] >= 100)) { 

            // Translate state abbreviations
            $region = $line[3];
            if ($line[0] == 'us') {
                if (isset($states[$line[3]])) {
                    $region = $states[$line[3]];
                }
            }

            // Translate Country Abbreviations
            $country = $line[0];
            if ($line[0] != '') {
                if (isset($countrycodes[strtoupper($line[0])])) {
                    $country = $countrycodes[strtoupper($line[0])];
                }
            }
            
            if ($country == 'United States') {
                $id = str_replace(' ', '_', $line[2] . '-' . $region . '-' . $country);
            } else {
                $id = str_replace(' ', '_', $line[2] . '-' . $country);
            }
        
            // Setup fields for database import
            $fields = array('id' => $id,
                            'country' => $country, 
	                        'city' => $line[2], 
	                        'region' => $region, 
	                        'population' => $line[4], 
	                        'latitude' => $line[5],
                            'longitude' => $line[6]);

	 
            $sql = "insert into city (";
            $i=0;
            foreach ($fields as $key => $value) {
                if ($i==0) {
                    $sql .= $key;
                    $values = "'" . mysql_real_escape_string($value) . "'";
                } else {
                    $sql .= ', ' . $key;
                    $values .= ", '" . mysql_real_escape_string($value)	 . "'";
                }
                $i++;
            }
            $sql .= ') values(' . $values . ')';

            mysql_query($sql);
            if(mysql_error()) {
                echo mysql_error();
	        echo "\n$sql";
                die();
            }
        }  
    }
    fclose($handle);
} else {
    echo 'unable to open file';
}

mysql_close($conn);

echo 'Complete';
?>
