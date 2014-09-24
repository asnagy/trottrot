    <!-- My Destinations -->
    <div class="container">
      <div class="row">

        <div class="col-md-2 col1">
        </div>
      
        <div class="col-md-6 feed-main">
          <h2>Search for <strong>{$query}</strong></h2>
          <div class="media feed-main">
            
            {foreach from=$userList item=resultUser}
            <a class="pull-left" href="#">
              <img class="media-object" src="/photos/avatar/{$resultUser->id}.jpg" width="50" alt="{$resultUser->name}'s Profile Photo">
            </a>
            <div class="media-body">
              {if $user->isFollowing($resultUser)}
              <button class="btn btn-success btn-sm pull-right" style="pointer-events: none;"><span class="fa fa-check"> Following</button>
              {else}
              <button class="btn btn-primary btn-sm btn-follow pull-right" onClick="beenThere('{$id}'); return false;"><span class="fa fa-plus"> Follow</button>
              {/if}
              <h4 class="media-heading"><a href="/profile/{$resultUser->id}">{$resultUser->fname} {$resultUser->lname}</a></h4>
              <p><span class="badge">16 Reviews</span>  <span class="badge">4 Itineraries</span></p>
            </div>
            {/foreach}

          </div>                
        </div>
        
        <div class="col-md-4">


        </div>
        
      </div>
    </div>
