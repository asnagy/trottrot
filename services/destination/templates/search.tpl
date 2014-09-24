    <div class="container container-body">

      <div class="row">
      
        <div class="col-md-7">
        <div class="panel" style="padding:1em;">

          {if $query}
          <p>Your search for <strong>{$query}</strong></p>
          {else}
          <h3>Browse Top Destinations</h3>
          {/if}
        
          {if $list}
          <ul class="media-list feed-main infinite-container">
            {foreach from=$list item=city}
            <li class="media infinite-item">
              <a class="pull-left" href="/destination/{$city->city|replace:' ':'_'}-{if $city->country == "United States"}{$city->region|replace:' ':'_'}-{/if}{$city->country|replace:' ':'_'}">
                <img class="media-object" src="http://placehold.it/100x100&text={$city->city}" width="100" alt="{$city->city}">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/destination/{$city->city|replace:' ':'_'}-{if $city->country == "United States"}{$city->region|replace:' ':'_'}-{/if}{$city->country|replace:' ':'_'}">{$city->city}, {if $city->country == "United States"}{$city->region}, {/if}{$city->country}</a></h4>
                <p class="feed-post-meta text-muted"><small>{$city->abstract|truncate:180:"...":false}</small></p>  
                <a class="text-success" href="/destination/{$city->city|replace:' ':'_'}-{if $city->country == "United States"}{$city->region|replace:' ':'_'}-{/if}{$city->country|replace:' ':'_'}#itinerary"><span class="fa fa-caret-right"></span> <small>8 trips in your network</small></a>
              </div>
            </li>
            {/foreach}
            {if count($list) == 10}
            <li class="infinite-loading text-center text-muted"><span class="fa fa-circle-o-notch fa-spin"></span> <small>Loading More Results...</small></li>
            {/if}
          </ul>
          {if count($list) == 10}
          <a href="/destination/search?q={$query}&pg={$nextPg}" class="infinite-more-link text-center">More</a>
          {/if}
          {else}
          <div class="alert alert-warning" role="alert"><strong>No results found!</strong></div>
          <div class="well">
            <strong>Now What?</strong>
            <ul>
              <li><a href="#">Request this destination to be added</a></li>
              <li>Check your spelling</li>
              <li>Try searching for a country or city</li>
            </ul>
          </div>
          {/if}
        
        </div>
        </div>
        
        <div class="col-md-5">
        <div style="padding:1em;">
          {if !$user}
          <div class="well">
            <h2>Connect on TrotTrot</h2>
            <p>Connect with friends on TrotTrot to find trusted reviews and discover your next desitination!</p>
            <hr>
            <a class="btn btn-default btn-block" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</a>
            <a href="/account/new" class="btn btn-primary btn-block"><span class="fa fa-user fa-lg"></span> &nbsp; Create Account</a>
          </div>
          {else}
          <h4>Trending Destinations</h4>
          <div id="map-container"></div>

          <h4>Travelers You May Know</h4>
          <ul class="media-list">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">3rd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
          </ul>
          {/if}
        </div>
        </div>
        
      </div>
    </div>
