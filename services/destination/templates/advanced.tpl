<div class="container" style="background-color:#fff;">
  <div class="row">
    
    <div class="col-md-8">
      <h3>Destination Search</h3>
      
      <div class="well">
            <form class="form-horizontal" role="form" action="/destination/search" method="post">
              <fieldset>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Continent</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="continent">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Population Size</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="pop_size">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Language Spoken</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="language">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-info btn-sm">Search</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
      </div>
      
    </div>
  

  </div>
</div>
