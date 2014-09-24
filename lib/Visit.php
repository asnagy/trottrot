<?php
/**
 * Table Definition for visit
 */
require_once 'DB/DataObject.php';

class DataObject_Visit extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'visit';               // table name
    public $id;                              // int(11)  not_null primary_key unsigned auto_increment
    public $user_id;                         // string(50)  not_null
    public $itinerary_id;                    // int(11)  
    public $city_id;                         // string(200)  not_null
    public $startdate;                       // date(10)  binary
    public $enddate;                         // date(10)  binary
    public $created_date;                    // date(10)  binary

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function getTrending($limit = 0, $inNetwork = false)
    {
        require_once 'lib/City.php';
    
        $city = new DataObject_City();
        $visit = new DataObject_Visit();
        $visit->whereAdd("visit.created_date BETWEEN '" . date('Y-m-d', strtotime("-90 days")) . "' AND '" . date('Y-m-d') . "'");
        //$visit->whereAdd("visit.created_date BETWEEN '" . date('Y-m-d', strtotime("-30 days")) . "' AND '" . date('Y-m-d') . "'");
        //if ($inNetwork) {
        //}
        if ($limit) {
            $city->limit($limit);
        }
        $city->selectAdd("count(city.id) AS visitCount");
        $city->orderBy('visitCount DESC, visit.created_date DESC');
        $city->groupBy('visit.city_id');
        $city->joinAdd($visit);
        if ($city->find()) {
            $list = array();
            while($city->fetch()) {
                $list[] = clone($city);
            }
            return $list;
        }
        
        return null;
    }
}