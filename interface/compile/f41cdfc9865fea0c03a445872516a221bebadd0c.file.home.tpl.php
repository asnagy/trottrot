<?php /* Smarty version Smarty-3.1.19, created on 2014-09-22 19:12:16
         compiled from "/Library/WebServer/Documents/trip/services/destination/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183347196553ead5692c6eb7-66833206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41cdfc9865fea0c03a445872516a221bebadd0c' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/destination/templates/home.tpl',
      1 => 1411413134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183347196553ead5692c6eb7-66833206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ead569308d86_49103559',
  'variables' => 
  array (
    'bgimage' => 0,
    'city' => 0,
    'user' => 0,
    'id' => 0,
    'itineraryList' => 0,
    'reviewList' => 0,
    'photoList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ead569308d86_49103559')) {function content_53ead569308d86_49103559($_smarty_tpl) {?>    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="background-attachment:scroll; background-position:0% 0%; background-image:url('<?php echo $_smarty_tpl->tpl_vars['bgimage']->value;?>
'); padding-bottom:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1 style="color:#fff; text-shadow:2px 2px #000;"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
</h1>
            <div class="pull-right" style="position:relative; top:-20px;">
              <?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value->hasVisited($_smarty_tpl->tpl_vars['id']->value)) {?>
              <button class="btn btn-success btn-sm"><span class="fa fa-check"></span> Visited</button>
              <?php } else { ?>
              <a href="#" class="btn btn-default btn-sm" data-loading-text="Saving..." onClick="beenThere('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a>
              <?php }?>
              <a href="/itinerary/new?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-default btn-sm"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a>
            </div>
          </div>
        </div>
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
          <?php if ($_smarty_tpl->tpl_vars['city']->value->country=="United States") {?>
          <a class="navbar-brand" href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['city']->value->region;?>
</a>
          <?php } else { ?>
          <a class="navbar-brand" href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['city']->value->country;?>
</a>
          <?php }?>
        </div>
      
        <ul class="nav navbar-nav">
          <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/friends"><span class="fa fa-users"></span> <?php echo count($_smarty_tpl->tpl_vars['city']->value->getFriends($_smarty_tpl->tpl_vars['user']->value));?>
 Friends</a></li>
          <?php }?>
          <li class="active"><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"><span class="fa fa-map-marker"></span> <?php echo count($_smarty_tpl->tpl_vars['itineraryList']->value);?>
 Itineraries</a></li>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/reviews"><span class="fa fa-file-text"></span> <?php echo count($_smarty_tpl->tpl_vars['reviewList']->value);?>
 Reviews</a></li>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/photos"><span class="fa fa-camera"></span> <?php echo count($_smarty_tpl->tpl_vars['photoList']->value);?>
 Photos</a></li>
        </ul>
      </div>
    </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
            <?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value->hasVisited($_smarty_tpl->tpl_vars['id']->value)) {?>
          <p><button class="btn btn-success btn-sm btn-block"><span class="fa fa-check"></span> Visited</button></p>
            <?php } else { ?>
          <p><a href="#" class="btn btn-info btn-sm btn-block" data-loading-text="Saving..." onClick="beenThere('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a></p>
            <?php }?>
          <p><a href="/itinerary/new?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-info btn-sm btn-block"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a></p>
        </div>
      
        <div class="col-md-7 feed-main">
          <h2><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
 Itineraries</h2>
          
          <ul class="media-list feed-main">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <div class="media-body">
                    <h4 class="media-heading">A tour of macaroons</h4>
                    <div class="row">
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 1" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 2" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 3" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                      <div class="col-xs-6 col-md-2"><a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Photo 4" width="50" alt="Paris"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>            
          
        </div>
        
        <div class="col-md-3">
          AD SPACE
        </div>
        
      </div>
    </div><?php }} ?>
