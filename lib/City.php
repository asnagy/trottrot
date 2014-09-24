<?php
/**
 * Table Definition for user
 */
require_once 'DB/DataObject.php';

class DataObject_City extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'city';                // table name
    public $id;                              // string(200)  not_null primary_key
    public $city;                            // string(200)  not_null
    public $country;                         // string(200)  
    public $region;                          // string(200)  
    public $latitude;                        // string(50)  
    public $longitude;                       // string(50)  
    public $population;                      // int(11)  
    public $abstract;                        // blob(65535)  blob

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function getFriends($user)
    {
        require_once 'lib/Visit.php';
    
        $friendList = $user->getFriends();

        $user = new DataObject_User();
        $visit = new DataObject_Visit();
        $visit->city_id = $this->id;
        if ($friendList) {
            foreach($friendList as $friend) {
                $visit->whereAdd("visit.user_id = '$friend->id'", 'OR');
            }
            $user->joinAdd($visit);
            if ($user->find()) {
                $list = array();
                while ($user->fetch()) {
                    $list[] = clone($user);
                }
                return $list;
            }
        }
        
        return null;
    }
}
