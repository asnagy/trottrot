    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="background-attachment:scroll; background-position:0% 0%; background-image:url('{$bgimage}'); padding-bottom:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1 style="color:#fff; text-shadow:2px 2px #000;">{$city->city}</h1>
            <div class="pull-right" style="position:relative; top:-20px;">
              {if $user->hasVisited($id)}
              <button class="btn btn-success btn-sm"><span class="fa fa-check"></span> Visited</button>
              {else}
              <a href="#" class="btn btn-default btn-sm" data-loading-text="Saving..." onClick="beenThere('{$id}'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a>
              {/if}
              <a href="/itinerary/new?id={$id}" class="btn btn-default btn-sm"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Profile Nav -->
    <div id="nav-destination">
    <div class="navbar navbar-default navbar-static" role="navigation" style="margin-bottom:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/destination/{$city->id}">{$city->city}, {$city->country}</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="/destination/{$city->id}/friends"><span class="fa fa-users"></span> {$friendList|@count} Friends</a></li>
          <li><a href="/destination/{$city->id}"><span class="fa fa-map-marker"></span> 27 Itineraries</a></li>
          <li><a href="/destination/{$city->id}/reviews"><span class="fa fa-file-text"></span> 73 Reviews</a></li>
          <li><a href="/destination/{$city->id}/photos"><span class="fa fa-camera"></span> 862 Photos</a></li>
        </ul>
      </div>
    </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
          {if $user->hasVisited($id)}
          <p><button class="btn btn-success btn-sm btn-block"><span class="fa fa-check"></span> Visited</button></p>
          {else}
          <p><a href="#" class="btn btn-info btn-sm btn-block" data-loading-text="Saving..." onClick="beenThere('{$id}'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a></p>
          {/if}
          <p><a href="/itinerary/new?id={$id}" class="btn btn-info btn-sm btn-block"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a></p>
        </div>
      
        <div class="col-md-7 feed-main">
          <h2>Friends that have been to {$city->city}</h2>
          
          <ul class="media-list feed-main">
            {foreach from=$friendList item=friend}
            <li class="media">
              <a class="pull-left" href="/profile/{$friend->id}">
                <img class="media-object" src="/photos/avatar/{$friend->user_id}.jpg" width="50" alt="{$friend->fname}">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/{$friend->user_id}">{$friend->fname} {$friend->lname}</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
              </div>
            </li>
            {/foreach}
          </ul>            
          
        </div>
        
        <div class="col-md-3">
          AD SPACE
        </div>
        
      </div>
    </div>