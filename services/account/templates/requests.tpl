<div class="container container-body">

  <div class="row">
    
    <div class="col-md-8">
      <h3>You have {$list|@count} new friend requests</h3>
      
      <div class="list-group">
        {foreach from=$list item=friend}
        <a href="/profile/{$friend->id}" class="list-group-item">
          <div class="pull-right">
            <button class="btn btn-info btn-sm">Approve <span class="fa fa-check"></span></button>
            <button class="btn btn-default btn-sm">Ignore <span class="fa fa-times"></span></button>
          </div>
          <img src="/photos/avatar/{$friend->id}.jpg" width="50" class="pull-left" style="margin-right:1em;">
          <h4 class="list-group-item-heading"> {$friend->fname} {$friend->lname}</h4>
          <p class="list-group-item-text clearfix">
            <span class="badge">{$friend->getItineraries()|@count}</span> Itineraries
            <span class="badge">{$friend->getFriends()|@count}</span> Friends
            <span class="badge">{$friend->getVisits()|@count}</span> Cities
          </p>
        </a>
        {/foreach}
      </div>
    </div>
    
    <div class="col-md-4" style="background-color:#fff;">
      <h3>Travelers You May Know</h3>
    
      {if $friendList}
      <ul class="media-list">
        {foreach from=$friendList item=friend}
        <li class="media">
          <button class="btn btn-info btn-xs btn-follow pull-right" onClick="follow('{$friend->id}');"><span class="fa fa-plus-square"></span> Follow</button>
          <a href="/profile/{$friend->id}" class="pull-left">
            <img src="/photos/avatar/{$friend->id}.jpg" width="50" class="img-rounded pull-left" style="margin-right:1em;">
          </a>
          <div class="media-body">
            <h4 class="media-heading"><a href="/profile/{$friend->id}">{$friend->fname} {$friend->lname}</a></h4>
            <p class="text-muted small">
              <span class="badge">47</span> Itineraries
              <span class="badge">23</span> Friends
              <span class="badge">65</span> Cities
            </p>
          </div>
        </div>
        {/foreach}
      </div>
      {else}
      <div class="well">
        <p>Connect your facebook account to find new connections on TrotTrot</p>
        <button type="submit" class="btn btn-default btn-block" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</button>
        <strong>OR</strong>
        <p>Search for friends on TrotTrot</p>
        <form role="form" method="post" action="/profile/search">
          <div class="form-group">
            <input name="q" type="text" class="form-control" id="friendSearch" placeholder="Friend's name...">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>        
      </div>
      {/if}

    </div>
    
  </div>
      
</div>