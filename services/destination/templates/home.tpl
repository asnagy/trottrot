    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="background-attachment:scroll; background-position:0% 0%; background-image:url('{$bgimage}'); padding-bottom:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1 style="color:#fff; text-shadow:2px 2px #000;">{$city->city}</h1>
            <div class="pull-right" style="position:relative; top:-20px;">
              {if $user && $user->hasVisited($id)}
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
          {if $city->country == "United States"}
          <a class="navbar-brand" href="/destination/{$city->id}">{$city->city}, {$city->region}</a>
          {else}
          <a class="navbar-brand" href="/destination/{$city->id}">{$city->city}, {$city->country}</a>
          {/if}
        </div>
      
        <ul class="nav navbar-nav">
          {if $user}
          <li><a href="/destination/{$city->id}/friends"><span class="fa fa-users"></span> {$city->getFriends($user)|@count} Friends</a></li>
          {/if}
          <li class="active"><a href="/destination/{$city->id}"><span class="fa fa-map-marker"></span> {$itineraryList|@count} Itineraries</a></li>
          <li><a href="/destination/{$city->id}/reviews"><span class="fa fa-file-text"></span> {$reviewList|@count} Reviews</a></li>
          <li><a href="/destination/{$city->id}/photos"><span class="fa fa-camera"></span> {$photoList|@count} Photos</a></li>
        </ul>
      </div>
    </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
            {if $user && $user->hasVisited($id)}
          <p><button class="btn btn-success btn-sm btn-block"><span class="fa fa-check"></span> Visited</button></p>
            {else}
          <p><a href="#" class="btn btn-info btn-sm btn-block" data-loading-text="Saving..." onClick="beenThere('{$id}'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a></p>
            {/if}
          <p><a href="/itinerary/new?id={$id}" class="btn btn-info btn-sm btn-block"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a></p>
        </div>
      
        <div class="col-md-7 feed-main">
          <h2>{$city->city} Itineraries</h2>
          
          <ul class="media-list feed-main">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>            
          
        </div>
        
        <div class="col-md-3">
          AD SPACE
        </div>
        
      </div>
    </div>