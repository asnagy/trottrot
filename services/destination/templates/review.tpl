    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="color:#fff; text-shadow:2px 2px #000; background-attachment:scroll; background-position:0% 0%; background-image:url('{$bgimage}');">
      <div class="container">
        <h1>{$city->city}</h1>
      </div>
    </div>

    <!-- Profile Nav -->
    <div id="nav-destination">
    <div class="navbar navbar-default navbar-static" role="navigation" style="margin-bottom:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="destination.html">{$city->city}, {$city->country}</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><span class="fa fa-map-marker"></span> 27 Itineraries</a></li>
          <li><a href="#"><span class="fa fa-file-text"></span> 73 Reviews</a></li>
          <li><a href="#"><span class="fa fa-camera"></span> 862 Photos</a></li>
          <li><a href="#"><span class="fa fa-users"></span> 17 Friends</a></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="container container-body">
      
      <form role="form">
        <div class="form-group">
          <label for="reviewTitle" class="sr-only">Review Title</label>
          <input type="text" class="form-control" name="reviewTitle" id="reviewTitle" placeholder="review title">
        </div>
        <div class="form-group">
          <label for="rating" class="sr-only">Rating</label>
          <div class="radio">
            <label><input type="radio" name="rating" id="rating" value="1" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="2" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="3" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="4" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="5" class="hidden"><span class="fa fa-star-o"></span></label>
          </div>
        </div>
        <div class="form-group">
          <label for="visitDate">Dates</label>
          <input type="date" name="startDate" id="visitDate">
          <input type="date" name="endDate" id="visitDate">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Why you liked {$city->city}</label>
          <textarea class="form-control" name="review" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-info btn-sm">Submit</button>
      </form>
      
    </div>