    <div class="container container-body">
      <div class="controls">
      
      <h3>Itinerary</h3>
      
      <form role="form" method="POST" action="/profile/itineraries">
        <div class="form-group">
          <label class="sr-only" for="itineraryTitle">Itinerary Title</label>
          <input type="text" class="form-control" name="itineraryTitle" id="itineraryTitle" placeholder="title, example: Our Honeymoon">
        </div>
        <div class="panel panel-default entry">
          <div class="panel-heading">
            Destination
            <button class="pull-right btn btn-success btn-add btn-xs" type="button"><span class="glyphicon glyphicon-plus"></span> Add</button>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="sr-only" for="destination">Destination</label>
              <input type="hidden" name="hiddenId[]" value="">
              <input type="text" class="form-control autocomplete" name="destination[]" data-provide="typeahead" autocomplete="off" id="destination" placeholder="destination">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label for="itineraryStart" class="sr-only">Start</label>
                  <div class="input-append date" id="datepicker1" data-date-format="dd/mm/yyyy">
                    <input type="text" name="startdate[]" placeholder="start date" id="itineraryStart">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  </div>            
                </div>
                <div class="col-md-4">
                  <label for="itineraryEnd" class="sr-only">End</label>
                  <div class="input-append date" id="datepicker2" data-date-format="dd/mm/yyyy">
                    <input type="text" name="enddate[]" placeholder="start date" id="itineraryEnd">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  </div>            
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="itineraryDate">Shared</label>
          <div class="radio"><label><input type="radio" name="shared" value="true" checked="true"> Public</label></div>
          <div class="radio"><label><input type="radio" name="shared" value="false"> Private</label></div>
        </div>
        <button type="submit" class="btn btn-info btn-sm">Submit</button>
      </form>
      
      </div>
    </div>