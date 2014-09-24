<?php
/**
 * Table Definition for city_extra
 */
require_once 'DB/DataObject.php';

class DataObject_City_extra extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'city_extra';          // table name
    public $id;                              // int(11)  not_null primary_key unsigned auto_increment
    public $city_id;                         // int(11)  not_null
    public $banner_image;                    // string(50)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
