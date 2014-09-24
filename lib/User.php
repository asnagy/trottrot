<?php
/**
 * Table Definition for user
 */
require_once 'DB/DataObject.php';

class DataObject_User extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'user';                // table name
    public $id;                              // string(50)  not_null primary_key
    public $fname;                           // string(200)  not_null
    public $lname;                           // string(200)  not_null
    public $nickname;                        // string(100)  not_null
    public $airport;                         // string(5)  
    public $hometown;                        // string(100)  
    public $email;                           // string(400)  not_null unique_key
    public $password;                        // string(50)  not_null
    public $last_login_date;                 // timestamp(19)  unsigned zerofill binary
    public $cover_image;                     // string(50)  
    public $banner_image;                    // string(50)  
    public $email_verified;                  // int(1)  not_null
    public $subscribed;                      // int(1)  not_null
    public $facebook_id;                     // string(50)  
    public $instagram_id;                    // string(50)  
    public $status;                          // int(11)  not_null
    public $private;                         // int(11)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        }
        
        return false;
    }
    
    function setPassword($password)
    {
        if (strlen($password) >= 8) {
            $this->password = md5($password);
            return true;
        }
        
        return false;
    }
    
    function getFriendRequests()
    {
        require_once 'lib/Friendship.php';
    
        $user = new DataObject_User();
        $sql = "SELECT * FROM user INNER JOIN friendship ON (friendship.initiator_user_id=user.id) " . 
               "WHERE (friendship.create_date IS NULL) AND (friendship.recipient_user_id = '" . $this->id . "')";
        $user->query($sql);
        $list = array();
        while($user->fetch()) {
            $list[] = clone($user);
        }
 
        return $list;
    }

    function addFriendRequest($friend)
    {
        require_once 'sys/MailUtil.php';
        require_once 'lib/Friendship.php';
    
        $request = new DataObject_Friendship();
        $request->initiator_user_id = $this->id;
        $request->recipient_user_id = $friend->id;
        $request->initial_date = date('Y-m-d');
        if ($request->insert()) {
            MailUtil::alertFriendRequest($this, $friend);
            return true;
        }
        
        return false;
    }

    function getFriends()
    {
        require_once 'lib/Friendship.php';
    
        /*
        $user = new DataObject_User();
        $requests = new DataObject_Friendship();
        $requests->whereAdd("(friendship.recipient_user_id = '$this->id' OR friendship.initiator_user_id = '$this->id')");
        $requests->whereAdd('friendship.create_date IS NOT NULL');
        $user->joinAdd($requests);
        if ($user->find()) {
            $list = array();
            while($user->fetch()) {
                $list[] = clone($user);
            }
            return $list;
        }
        */

        $requests = new DataObject_Friendship();
        $requests->whereAdd('create_date IS NOT NULL');
        $requests->whereAdd("recipient_user_id = '$this->id'");
        $requests->whereAdd("initiator_user_id = '$this->id'", 'OR');
        if ($requests->find()) {
            $user = new DataObject_User();
            while($requests->fetch()) {
                if ($requests->initiator_user_id != $this->id) {
                    $user->whereAdd("id = '$requests->initiator_user_id'", 'OR');
                } elseif ($requests->recipient_user_id != $user->id) {
                    $user->whereAdd("id = '$requests->recipient_user_id'", 'OR');
                }
            }
            if ($user->find()) {
                $list = array();
                while($user->fetch()) {
                    $list[] = clone($user);
                }
                return $list;
            }
        }
        
        return null;
    }

    function isFollowing($user)
    {
        require_once 'lib/Friendship.php';
        $requests = new DataObject_Friendship();
        $requests->whereAdd('create_date IS NOT NULL');
        $requests->whereAdd("(recipient_user_id = '$this->id' AND initiator_user_id = '$user->id')");    
        $requests->whereAdd("(recipient_user_id = '$user->id' AND initiator_user_id = '$this->id')", 'OR');
        return $requests->count();
    }
    
    function addVisit($city, $itinerary = null, $start = null, $end = null)
    {
        require_once 'lib/Visit.php';
        require_once 'lib/City.php';
        require_once 'lib/Itinerary.php';
        
        $visit = new DataObject_Visit();
        $visit->user_id = $this->id;
        $visit->city_id = $city->id;
        $visit->created_date = date('Y-m-d');
        if ($itinerary != null) {
            $visit->itinerary_id = $itinerary->id;
        }
        if ($start != null) {
            $visit->startdate = $start;
            $visit->enddate = $end;
        }
        return $visit->insert();
    }

    function getVisits()
    {
        require_once 'lib/Visit.php';
        require_once 'lib/City.php';
        require_once 'lib/Itinerary.php';
        
        $city = new DataObject_City();
        $visit = new DataObject_Visit();
        $visit->user_id = $this->id;
        $visit->orderBy('created_date');
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
    
    function hasVisited($cityId)
    {
        require_once 'lib/Visit.php';

        $visit = new DataObject_Visit();
        $visit->user_id = $this->id;
        $visit->city_id = $cityId;
        if ($visit->find()) {
            return true;
        }
        
        return false;
    }
    
    function getItineraries()
    {
        require_once 'lib/Itinerary.php';
        
        $itin = new DataObject_Itinerary();
        $itin->user_id = $this->id;
        if ($itin->find()) {
            $list = array();
            while($itin->fetch()) {
                $list[] = clone($itin);
            }
            return $list;
        }
        
        return null;
    }
    
    function getItineraryCount()
    {
        require_once 'lib/Itinerary.php';
        
        $itin = new DataObject_Itinerary();
        $itin->user_id = $this->id;
        return $itin->count();
    }

    function getActivity()
    {
        require_once 'lib/Visit.php';
        require_once 'lib/Itinerary.php';
        
        $list = array();
        $visits = $this->getVisits();
        foreach ($visits as $visit) {
            $list[$visit->created_date][$this->id]['user'] = $this;
            $list[$visit->created_date][$this->id]['visit'][] = $visit;
        }
        $itins = $this->getItineraries();
        foreach ($itins as $itin) {
            $list[$visit->created_date][$this->id]['user'] = $this;
            $list[$visit->created_date][$this->id]['itinerary'][] = $itin;
        }
        return $list;
    }

    function getFeed()
    {        
        require_once 'lib/Visit.php';
        require_once 'lib/City.php';

        // Get List of Friends
        $friendList = $this->getFriends();

        $activity = array();        
        if ($friendList) {
        
            // Get tagged cities
            $visit = new DataObject_Visit();    
            $user = new DataObject_User();
            foreach ($friendList as $friend) {
                $user->whereAdd("user.id = '$friend->id'", 'OR');
            }
            $visit->joinAdd($user);
            $city = new DataObject_City();
            $visit->joinAdd($city);
            if ($visit->find()) {
                $list = array();
                while($visit->fetch()) {
                    $list[] = clone($visit);
                }
                $activity['visits'] = $list;
            }
            
            // Get itineraries
            // Get new friends
            // Others?
        }
        return $activity;
    }
    
}
