<div class="container" style="background-color:#fff;">
      <h1>Welcome to TrotTrot!</h1>

      <div class="alert alert-info" role="alert"><strong>TrotTrot is in Beta!</strong> You will need to use a valid beta code in order to create an account.</div>

      {if $failed == 'email_exist'}
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! This email address is already registered.</div>
      {elseif $failed == 'email_invalid'}
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The email address is incorrect.</div>
      {elseif $failed == 'password'}
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The password must be at least 8 characters.</div>
      {elseif $failed == 'beta'}
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The beta code is invalid.</div>
      {/if}

      <div class="well">
            <form class="form-horizontal" role="form" action="/account/profile" method="post">
              <fieldset>
                {if $failed == 'beta'}
                <div class="form-group has-error has-feedback" style="border-bottom:1px solid #ccc; margin-bottom:1em;">
                  <label for="beta" class="col-lg-3 control-label">Beta Code</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="beta" name="beta">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>                    
                  </div>
                </div>
                {else}
                <div class="form-group" style="border-bottom:1px solid #ccc; padding-bottom:1em; margin-bottom:1em;">
                  <label for="beta" class="col-lg-3 control-label">Beta Code</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="beta" name="beta">
                  </div>
                </div>                
                {/if}
                <div class="form-group">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="{$user->fname}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="{$user->lname}">
                  </div>
                </div>
                {if $failed == 'email_exist' || $failed == 'email_invalid'}
                <div class="form-group has-error has-feedback">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="{$user->email}">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                {else}
                <div class="form-group">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="{$user->email}">
                  </div>
                </div>
                {/if}
                {if $failed == 'password'}
                <div class="form-group has-error has-feedback">
                  <label for="password" class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password" name="password" value="{$user->password}">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                {else}
                <div class="form-group">
                  <label for="password" class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password" name="password" value="{$user->password}">
                  </div>
                </div>
                {/if}
                <div class="form-group">
                  <label for="password" class="col-lg-3 control-label">Password Again</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password2" name="password2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
      </div>
      
</div>