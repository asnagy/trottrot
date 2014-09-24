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
            <form class="form-horizontal" role="form" action="/account/settings" method="post">
              <fieldset>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Account Visibility</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label><input type="radio" name="status" value="0"{if !$user->status}checked="true"{/if}> Public
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="status" value="1"{if $user->status}checked="true"{/if}> Private
                    </div>
                  </div>
                </div>
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
