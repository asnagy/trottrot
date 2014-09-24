<!--
<div class="modal fade" id="popup">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4>TrotTrot is new!</h4>
      </div>
      <div class="modal-body">
        <h1>Welcome to trusted travel!</h1>
        <p>Create an account now and connect with friends to learn about the places they've been and see recommendations for where you next desitnation should be.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
-->

<div class="jumbotron">
  <div class="container">
    <h1 class="cover-heading">Discover your next destination</h1>
    <p>Connect on TrotTrot to find reviews and travel itineraries that you can trust.</p>
    <p><a href="/account/login" class="btn btn-primary btn-lg" role="button">Let's Get Started</a></p>
  </div>
</div>

<div class="well">
  <div class="container">
            <form class="form-horizontal" role="form" action="/destination/search" method="get">
              <div class="form-group">
                <div class="input-group tt-input-group">
                  <input type="text" class="form-control autocomplete" name="q" id="focusInput" placeholder="city or country name..." autocomplete="off">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-info" tabindex="-1">Search</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="/destination/advanced">Advanced Search</a></li>
                    </ul>
                  </div>
                </div>
              </div>            
            </form>
  </div>
</div>

<div class="container" style="padding-bottom:4em;">
  <h3>Trending Destinations</h3>
  
  {if $trending}
  {foreach from=$trending item="trendingCity" name="trending"}
    {if ($smarty.foreach.trending.iteration % 5) == 1}
    <div class="row">
      <div class="col-md-6">
    {else}
      <div class="col-md-3">
    {/if}
        <a href="/destination/{$trendingCity->city_id}">
        {*assign var=image value=$siteConfig.photos|cat:"/cities/avatar/"|cat:$trendingCity->city_id|cat:".jpg"*}
        {if is_file($image)}
          <img src="/photos/cities/avatar/{$trendingCity->city_id}.jpg" alt="{$trendingCity->city}" class="img-responsive">
        {else}
          <img src="http://placehold.it/600x450&text={$trendingCity->city}" alt="{$trendingCity->city}" class="img-responsive">
        {/if}
          <div class="caption"><h4>{$trendingCity->city}</h4></div>
        </a>
      </div>
    {if !($smarty.foreach.trending.iteration % 5)}
    </div>
    {/if}
  {/foreach}
  {else}
      <div class="row">
        <div class="col-md-2">
          <a href="/destination/London-United_Kingdom" class="img-responsive">
            <img src="http://placehold.it/600x450&text=London" alt="London">
            <div class="caption">
              <h4>London</h4>
            </div>	
          </a>
        </div>
        <div class="col-md-2">
          <a href="/destination/Hong-Kong_China" class="img-responsive">
            <img src="http://placehold.it/600x450&text=Hong Kong" alt="Hong Kong">
            <div class="caption">
              <h4>Hong Kong</h4>
            </div>	
          </a>
        </div>
        <div class="col-md-2">
          <a href="/destination/New_York_City-New_York-United_States" class="img-responsive">
            <img src="http://placehold.it/600x450&text=New York City" alt="New York City">
            <div class="caption">
              <h4>New York City</h4>
            </div>	
          </a>
        </div>
        <div class="col-md-2">
          <a href="/destination/Singapore-Singapore" class="img-responsive">
            <img src="http://placehold.it/600x450&text=Singapore" alt="Singapore">
            <div class="caption">
              <h4>Singapore</h4>
            </div>	
          </a>
        </div>
        <div class="col-md-2">
          <a href="/destination/Rome-Italy" class="thumbnail">
            <img src="http://placehold.it/100x50&text=Rome" alt="Rome">
            <div class="caption">
              <h4>Rome</h4>
            </div>	
          </a>
        </div>
        <div class="col-md-2">
          <a href="/destination/Paris-France" class="img-responsive">
            <img src="http://placehold.it/100x50&text=Paris" alt="Paris">
            <div class="caption">
              <h4>Paris</h4>
            </div>	
          </a>
        </div>
      </div>
      {/if}
      
      <div class="text-center">
        <a href="/destination/search" class="btn btn-success">See More Destinations</a>
      </div>
        
</div>

<div style="background-color:#fff; padding:4em 0;">
  <div class="container">
  
    <div class="row">
        <div class="col-lg-4">
          <h2>Trusted Reviews</h2>
          <p>Reviews of destinations and travels from those who you know and trust.  Have a friend who knows someone who recently visited Greece? Now you can learn about that destination from your social network rather than hundreds or thousands of reviews from complete strangers.</p>
          <p><a class="btn btn-primary btn-sm" href="/about/more" role="button">Learn More <span class="fa fa-angle-double-right"></span></a></p>
        </div>
        <div class="col-lg-4">
          <h2>Practical Itineraries</h2>
          <p>Create itineraries for your next trip from existing itineraries or custom build your own. Then download to your smartphone, calendar or printer to have a simple and convenient itinerary all in one place.</p>
          <p><a class="btn btn-primary btn-sm" href="/about/more" role="button">Learn More <span class="fa fa-angle-double-right"></span></a></p>
       </div>
        <div class="col-lg-4">
          <h2>Track Your Travels</h2>
          <p>Show off all the great places you've seen and visited and rank on the leader boards to see who in your network has traveled the most!</p>
          <p><a class="btn btn-primary btn-sm" href="/about/more" role="button">Learn More <span class="fa fa-angle-double-right"></span></a></p>
        </div>
    </div>  
  
  </div>
</div>