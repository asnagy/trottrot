<?php
/**
 * Table Definition for itinerary
 */
require_once 'DB/DataObject.php';

class DataObject_Itinerary extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'itinerary';           // table name
    public $id;                              // int(11)  not_null primary_key unsigned auto_increment
    public $user_id;                         // string(50)  not_null
    public $title;                           // string(100)  not_null
    public $start_date;                      // date(10)  binary
    public $end_date;                        // date(10)  binary
    public $rating;                          // int(11)  
    public $story;                           // blob(65535)  blob
    public $private;                         // int(11)  not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function getItinerary()
    {
        require_once 'lib/Visit.php';
        require_once 'lib/City.php';
        
        $city = new DataObject_City();
        $visit = new DataObject_Visit();
        $visit->user_id = $this->id;
        $visit->itinerary_id = $this->id;
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
    
    function addVisit()
    {
        $visit->itinerary_id = $this->id();
        return $visit->insert();
    }

    function getCityList()
    {
        require_once 'lib/Visit.php';
        require_once 'lib/City.php';
    
        $city = new DataObject_City();
        $visit = new DataObject_Visit();
        $visit->itinerary_id = $this->id;
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