<link href="/css/cropper.css" rel="stylesheet">

<div class="container" style="background-color:#fff;">
  <div class="row">
    
    <div class="col-md-8">
      <h3>Hello {$user->fname}!</h3>
      
      {if isset($updateStatus)}
        {if $updateStatus}
      <div class="alert alert-success" role="alert"><span class="fa fa-check"></span> Your profile has been updated.</div>
        {else}
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Your profile updated failed.</div>
        {/if}
      {/if}

      <div class="well">
        <div class="row">
          <div class="col-md-4">
            <img src="/photos/avatar/{$user->id}.jpg" alt="{$user->fname}'s Profile Photo" style="max-width:220px; max-height:300px;">
            <div class="dropdown">
              <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:200px;">Change Photo <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#photoModal">Upload File</a></li>
              </ul>
            </div>
            
          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form" action="/account/profile" method="post">
              <fieldset>
                {if $user->fname != ''}
                <div class="form-group">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="{$user->fname}">
                  </div>
                </div>
                {else}
                <div class="form-group has-error has-feedback">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="{$user->fname}">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                {/if}
                {if $user->lname != ''}
                <div class="form-group">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="{$user->lname}">
                  </div>
                </div>
                {else}
                <div class="form-group has-error has-feedback">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="{$user->lname}">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                {/if}
                <div class="form-group">
                  <label for="nickname" class="col-lg-3 control-label">Nickname</label>
                  <div class="col-lg-9">          
                    <input type="text" class="form-control" id="email" name="nickname" value="{$user->nickname}">
                  </div>
                </div>
                {if $user->email != ''}
                <div class="form-group">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="{$user->email}">
                  </div>
                </div>
                {else}
                <div class="form-group has-error has-feedback">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="{$user->email}">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                {/if}
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label">Home Airport</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="airport" name="airport" value="{$user->airport}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="tt-input-group">
                  <label for="airport" class="col-lg-3 control-label">Home Town</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control autocomplete" id="hometown" name="hometown" value="{$user->hometown}" autocomplete="off">
                  </div>
                  </div>
                </div>
                {if $user->instagram_id != ''}
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label"><span class="fa fa-instagram"></span> Instagram Account</label>
                  <div class="col-lg-9">  
                    <img src="{$instagramThumbnail}" class="img-rounded"> {$instagramName}<br><a href="#">Remove</a>
                  </div>
                </div>
                {else}
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label"><span class="fa fa-instagram"></span> Instagram Username</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="instagram" name="instagram">
                  </div>
                </div>
                {/if}
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-info btn-sm">Save</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
          </div>
        </div>
      </div>
      
    </div>
  
    <div class="col-md-4">
      <h3>Connect with other travelers</h3>
    
      {if $friendList}
      <div class="list-group">
        {foreach from=$friendList item=friend}
        <div class="list-group-item">
          <!--<button type="submit" class="btn btn-info btn-sm pull-right"><span class="fa fa-plus-square"></span></button>-->
          <img src="/photos/avatar/{$friend->id}.jpg" width="50" class="img-rounded pull-left" style="margin-right:1em;">
          <h4 class="list-group-item-heading"><a href="/profile/{$friend->id}">{$friend->fname} {$friend->lname}</a></h4>
          <p class="list-group-item-text clearfix">
            <span class="badge">47</span> Itineraries
            <span class="badge">23</span> Friends
            <span class="badge">65</span> Cities
          </p>
        </a>
        <button class="btn btn-primary btn-xs btn-follow" onClick="follow('{$friend->id}');">Follow</button>
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

<!-- Modal -->
<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="PhotoModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Profile Photo</h4>
      </div>
      <div class="modal-body">
        
        <form class="form" method="post" action="/account/profile" enctype="multipart/form-data">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
            <img data-src="holder.js/100%x100%" alt="...">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
          <div>
            <span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="profile_photo"></span>
            <a href="#" class="btn btn-default btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>
        <div class="form-group text-right">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        
      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      -->
    </div>
  </div>
</div>

<script src="/js/cropper.js"></script>     

