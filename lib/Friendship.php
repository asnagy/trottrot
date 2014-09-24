<?php
/**
 * Table Definition for friendship
 */
require_once 'DB/DataObject.php';

class DataObject_Friendship extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'friendship';          // table name
    public $id;                              // int(11)  not_null primary_key unsigned auto_increment
    public $initiator_user_id;               // string(50)  not_null
    public $recipient_user_id;               // string(50)  not_null
    public $create_date;                     // timestamp(19)  unsigned zerofill binary
    public $initial_date;                    // timestamp(19)  not_null unsigned zerofill binary timestamp

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
