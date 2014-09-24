    <!-- Profile Banner -->
    <div class="banner">
      <img src="/photos/avatar/{$profileUser->id}.jpg" alt="{$profileUser->fname}'s Profile Picture" style="max-width:220px; max-height:300px;">
    </div>

    <!-- Profile Nav -->
    <div class="navbar navbar-default" style="padding-left: 350px; margin-bottom:20px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/profile/{$profileUser->id}">{$profileUser->fname} {$profileUser->lname}</a>
        <ul class="nav navbar-nav">
          <li><a href="/profile/{$profileUser->id}/friends" class="active">{$friendList|@count} Friends</a></li>
          <li><a href="/profile/{$profileUser->id}/cities">{$visitList|@count} Cities</a></li>
          <li><a href="/profile/{$profileUser->id}/countries">{$countryList|@count} Countries</a></li>
          <li><a href="/profile/{$profileUser->id}/itineraries">{$itinList|@count} Itineraries</a></li>
        </ul>
      </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
          {if $profileUser->hometown}
          <p><strong>{$profileUser->hometown}</strong></p>
          {/if}
          {if $user->airport}
          <p><span class="fa fa-plane"></span> {$profileUser->airport}</p>
          {/if}
          <p><span class="fa fa-twitter-square"></span> <a href="http://twitter.com/asnagy">@asnagy</a></p>
          <p><span class="fa fa-facebook-square"></span> <a href="http://www.facebook.com/asnagy">Facebook</a></p>
          <p><span class="fa fa-instagram"></span> <a href="http://instagram.com/asnagy">Instagram</a></p>
        </div>
      
        <div class="col-md-6 feed-main">
          <h2>My Itineraries</h2>
          <div class="media feed-main">
            
            {foreach from=$itinList item=itinerary}
            <a class="pull-left" href="#">
              <img class="media-object" src="/photos/itinerary/avatar/{$itin->id}.jpg" width="50" alt="{$itinerary->name}">
            </a>
            <div class="media-body">
              <h4 class="media-heading"><a href="/profile/{$friend->id}">{$itinerary->title}</a></h4>
              <p>Includes:
              {foreach from=$itinerary->getCityList() item="city"}
              {$city->name} &nbsp;
              {foreachelse}
              <span class="text-muted">missing data</span>
              {/foreach}
              <p><span class="badge">16 Reviews</span>  <span class="badge">4 Favorites</span></p>
            </div>
            {/foreach}

          </div>                
        </div>
        
        <div class="col-md-4">


        </div>
        
      </div>
    </div>
