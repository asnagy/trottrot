    <!-- Profile Banner -->
    <div class="banner">
      <img src="/photos/avatar/{$profileUser->id}.jpg" alt="{$profileUser->fname}'s Profile Picture" style="max-width:220px; max-height:300px;">
    </div>

    <!-- Profile Nav -->
    <div class="navbar navbar-default" style="padding-left: 350px; margin-bottom:20px;">
      <div class="container-fluid">
        <a class="navbar-brand">{$profileUser->fname} {$profileUser->lname}</a>
        <ul class="nav navbar-nav">
          <li><a href="/profile/{$profileUser->id}/friends">{$friendList|@count} Friends</a></li>
          <li><a href="/profile/{$profileUser->id}/cities">{$visitList|@count} Cities</a></li>
          <li><a href="/profile/{$profileUser->id}/countries">{$countryList|@count} Countries</a></li>
          <li><a href="/profile/{$profileUser->id}/itineraries">{$itinCount} Itineraries</a></li>
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
          <h2>My Destinations</h2>
          <div id="map-container"></div>
        </div>
        
        <div class="col-md-4">

          <div class="media feed-main">
            
            {foreach from=$visitList item=visit}
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/50x50&text={$visit->city}" width="50" alt="{$visit->city}">
            </a>
            <div class="media-body">
              <h4 class="media-heading"><a href="/destination/{$visit->city_id}">{$visit->city}, {$visit->country}</a> <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h4>
              <p><span class="badge">16 Visits</span>  <span class="badge">4 Reviews</span></p>
              <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 1" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 2" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 3" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 4" width="50" alt="Thumbnail"></a>
                </div>
              </div>
            </div>
            {/foreach}

          </div>                

        </div>
        
      </div>
    </div>
    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>     
      function init_map() {
        var var_location = new google.maps.LatLng(39.930538,-75.146484);
        var var_mapoptions = {
          center: var_location,
          zoom: 1,
          mapTypeControl: false,
          panControl:false,
          rotateControl:false,
          streetViewControl: false,          
        };
        var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
        
        var marker;
        var markers = new Array();
        
        {foreach from=$visitList item=visit}
        marker = new google.maps.Marker({
            position: new google.maps.LatLng({$visit->latitude},{$visit->longitude}),
            map: var_map,
            title:"{$visit->city}, {$visit->country}"});
        markers.push(marker);        
        {/foreach}
        
        var homePin = new google.maps.MarkerImage('/img/home-pin.png', null, null, null, new google.maps.Size(50, 50));
        marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            icon: homePin,
            zIndex: google.maps.Marker.MAX_ZINDEX + 1,
            title:"Hometown"});
        markers.push(marker);        

      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>        