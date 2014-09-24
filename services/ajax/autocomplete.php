<?php
require_once 'Action.php';
require_once 'lib/City.php';

class AjaxAutocomplete extends Action {
    
    function launch()
    {
        global $configArray;

        $cityList = array(); 

        if (isset($_GET['q']) && ($_GET['q'] != '')) {
            $city = new DataObject_City();
            $city->whereAdd("city LIKE '" . $_GET['q'] . "%'");
            $city->orderBy('population DESC');
            $city->limit(10);
            $city->find();

            while ($city->fetch()) {
                $cityStr = mb_convert_encoding($city->city, "UTF-8", "Windows-1252");
                $regionStr = mb_convert_encoding($city->region, "UTF-8", "Windows-1252");
                $countryStr = mb_convert_encoding($city->country, "UTF-8", "Windows-1252");
                if ($city->country == 'United States') {
                    $id = str_replace(' ', '_', "$cityStr-$regionStr-$countryStr");
                    $region = "$regionStr, $countryStr";
                } else {
                    $id = str_replace(' ', '_', "$cityStr-$countryStr");
                    $region = $countryStr;
                }
                $cityList[] = array('city' => $cityStr, 'region' => $region, 'id' => $id);
            }
            //$cityList = array_map('htmlentities',$cityList);
        }

        header('Content-type: application/json');
        echo json_encode($cityList, JSON_UNESCAPED_UNICODE);
    }
    
}
?>
