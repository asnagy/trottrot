<?php
/**
 * Table Definition for destination
 */
require_once 'DB/DataObject.php';

class DataObject_Destination extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'destination';         // table name
    public $id;                              // int(11)  not_null primary_key unsigned auto_increment
    public $title;                           // string(100)  not_null
    public $last_update;                     // datetime(19)  not_null binary
    public $abstract;                        // blob(65535)  blob
    public $latitude;                        // real(12)  
    public $longitude;                       // real(12)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
