    {if $trending}
    <div class="gallery_wrapper">
      <div class="container">
        <h5>Trending Destinations</h5>
        <div class="row">
          {foreach from=$trending item="trendingCity"}
          <div class="col-md-2">
            <a href="/destination/{$trendingCity->city_id}">
              {assign var=image value=$siteConfig.photos|cat:"/cities/avatar/"|cat:$trendingCity->city_id|cat:".jpg"}
              {if is_file($image)}
              <img src="/photos/cities/avatar/{$trendingCity->city_id}.jpg" alt="{$trendingCity->city}" class="img-responsive">
              {else}
              <img src="http://placehold.it/400x316&text={$trendingCity->city}" alt="{$trendingCity->city}" class="img-responsive">
              {/if}
              <div class="caption"><h4>{$trendingCity->city}</h4></div>
            </a>
          </div>
          {/foreach}
        </div>
      </div>	
    </div>
    {/if}
    
    <div class="container">

      <div class="row">
      
        <div class="col-md-8">
        
          <!-- Start New Destination Post -->
          <div class="well">
            <div class="row">
              <div class="col-md-2">
                <a href="/profile"><img src="/photos/avatar/{$user->id}.jpg" width="80"></a>
              </div>
              <div class="col-md-10">
                <h4>Recommend a destination</h4>
                <form class="form" role="form" method="post" action="/destination/review">
                  <input type="hidden" name="id" id="hiddenid" value="">
                  <div class="form-group">
                    <div class="input-group">
                      <label class="sr-only" for="newDestination">New Destination</label>
                      <input type="text" id="newDestination" name="destination" class="form-control autocomplete" placeholder="where have you been?" data-provide="typeahead" autocomplete="off">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="nav nav-pills">
                  <li><a href="/itinerary/new">Create Itinerary</a></li>
                  <!--<li><a href="/destination/plan">Plan A Destination</a></li>-->
                </ul>
              </div>
            </div>
          </div>
                  
          <!-- Feed -->
          {foreach from=$activityList item="activityDateCluster" key="activityDate"}
            {foreach from=$activityDateCluster item="activityUserCluster"}
            {if $activityUserCluster.itinerary}
          <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/{$activityUserCluster.user->id}">{$activityUserCluster.user->fname} {$activityUserCluster.user->lname}</a></h3>
              <span class="text-muted"><small>{$activityDate}</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/{$activityUserCluster.user->id}.jpg" height="100" alt="{$activityUserCluster.user->fname} {$activityUserCluster.user->lname}">
                  </a>
                </div>
                <div class="col-md-10">
                  {foreach from=$activityUserCluster.itinerary item=itinerary}
                  <h4>Added an itinerary <a href="/destination/{$activity->city_id}">{$itinerary->title}</a></h4>
                  {/foreach}
                  <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
            {/if}
            {if $activityUserCluster.visit}
          <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/{$activityUserCluster.user->user_id}">{$activityUserCluster.user->fname} {$activityUserCluster.user->lname}</a></h3>
              <span class="text-muted"><small>{$activityDate}</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/{$activityUserCluster.user->id}.jpg" height="100" alt="{$activityUserCluster.user->fname} {$activityUserCluster.user->lname}">
                  </a>
                </div>
                <div class="col-md-10">
                  {foreach from=$activityUserCluster.visit item=visit}
                  <h4>Added a visit to <a href="/destination/{$activity->city_id}">{$visit->city}</a></h4>
                  {/foreach}
                  <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
            {/if}
            
          {/foreach}
          {/foreach}

          <ul class="media-list feed-main">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://brandsarchive.com/public/files/bahamas/BahamasLogo.jpg" width="50" alt="The Bahamas Tourism">
              </a>
              <div class="media-body">
                <h4 class="media-heading">The Bahamas Tourism</h4>
                <p class="feed-post-meta">Sponsored Post</p>
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://www.doctorshosp.com/new-site/userfiles/57576906%20High%20Res.jpg" height="100">
                  </a>
                  <div class="media-body">
                    Come to the Bahamas!  50% Off Package Deals!
                  </div>
                </div>                
              </div>
            </li>      
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/{$user->id}">Maria Nagy</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/50x50&text=Paris" width="50" alt="Paris">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="/destination/Paris-France">Paris, France</a></h4>
                    <p>OMG! The city of lights was amazing.  We ate dinner at this fabulous place...<p>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/2987868825/62023fb387cc83c3e30d67cd325cb2ea_200x200.jpeg" width="50" alt="Andrew Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/{$user->id}">Andrew Nagy</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>2 days ago</small></p>
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/50x50&text=Duck, NC" width="50" alt="Duck, NC">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="/destination/Duck-North_Carolina-United_States">Duck, North Carolina, United States</a></h4>
                    <p>The outer banks really took me by surprise, its much more affordable than the Jersey Shore...<p>
                  </div>
                </div>                
              </div>
            </li>      
          </ul>
        
        </div>
        
        <div class="col-md-4 feed-main">
          {if $facebookList.invites}
          <h4>Invite Friends to TrotTrot</h4>
          <ul class="media-list">
            {foreach from=$facebookList.invites item=friend}
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://graph.facebook.com/{$friend.id}/picture" width="50" alt="{$friend.name}">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">{$friend.name}</h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="fa fa-envelope"></span> Invite</button></p>  
              </div>
            </li>
            {/foreach}
          </ul>
          {/if}
          {if $facebookList.friends}
          <h4>Travelers You May Know</h4>
          <ul class="media-list">
            {foreach from=$facebookList.friends item=friend}
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="/photos/avatar/{$friend->id}.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            {/foreach}
          </ul>
          {/if}
        </div>
        
      </div>
    </div>
