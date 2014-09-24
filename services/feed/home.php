<?php
require_once 'Action.php';

require_once 'sys/UserUtil.php';
require_once 'sys/FacebookUtil.php';

require_once 'lib/Visit.php';

class FeedHome extends Action {
    
    function __construct()
    {
        UserUtil::requireLogin();
    }

    function launch()
    {
        global $interface;
        global $user;
        
        $feed = $user->getFeed();
        $interface->assign('feed', $feed);

        // Build Activity Feed
        $activityList = array();
        $friendList = $user->getFriends();
        foreach ($friendList as $friend) {
            $activityList = array_merge($activityList, $friend->getActivity());
        }
        $interface->assign('activityList', $activityList);	
        
        // Get Trending Destinations
        $trending = DataObject_Visit::getTrending(6);
        $interface->assign('trending', $trending);

        // Get Friends from Facebook to invite
        $facebookList = FacebookUtil::getFriends();
        $interface->assign('facebookList', $facebookList);

        $interface->setPageTitle('My Feed');
        $interface->setTemplate('home.tpl');
            
        // Cache the feed page for 5 minutes
        $interface->setCaching(Smarty::CACHING_LIFETIME_SAVED);
        $interface->setCacheLifetime(300);
        $interface->display('layout-auth.tpl');
    }
}

?>