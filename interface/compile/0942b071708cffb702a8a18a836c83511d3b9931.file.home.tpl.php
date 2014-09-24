<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 04:34:01
         compiled from "/Library/WebServer/Documents/trip/services/profile/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91898518453e98ef79cc769-47483051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0942b071708cffb702a8a18a836c83511d3b9931' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/profile/templates/home.tpl',
      1 => 1409027638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91898518453e98ef79cc769-47483051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e98ef7a0c589_12365452',
  'variables' => 
  array (
    'profileUser' => 0,
    'friendList' => 0,
    'visitList' => 0,
    'countryList' => 0,
    'itinCount' => 0,
    'user' => 0,
    'visit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e98ef7a0c589_12365452')) {function content_53e98ef7a0c589_12365452($_smarty_tpl) {?>    <!-- Profile Banner -->
    <div class="banner">
      <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->fname;?>
's Profile Picture" style="max-width:220px; max-height:300px;">
    </div>

    <!-- Profile Nav -->
    <div class="navbar navbar-default" style="padding-left: 350px; margin-bottom:20px;">
      <div class="container-fluid">
        <a class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['profileUser']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['profileUser']->value->lname;?>
</a>
        <ul class="nav navbar-nav">
          <li><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
/friends"><?php echo count($_smarty_tpl->tpl_vars['friendList']->value);?>
 Friends</a></li>
          <li><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
/cities"><?php echo count($_smarty_tpl->tpl_vars['visitList']->value);?>
 Cities</a></li>
          <li><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
/countries"><?php echo count($_smarty_tpl->tpl_vars['countryList']->value);?>
 Countries</a></li>
          <li><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
/itineraries"><?php echo $_smarty_tpl->tpl_vars['itinCount']->value;?>
 Itineraries</a></li>
        </ul>
      </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
          <?php if ($_smarty_tpl->tpl_vars['profileUser']->value->hometown) {?>
          <p><strong><?php echo $_smarty_tpl->tpl_vars['profileUser']->value->hometown;?>
</strong></p>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['user']->value->airport) {?>
          <p><span class="fa fa-plane"></span> <?php echo $_smarty_tpl->tpl_vars['profileUser']->value->airport;?>
</p>
          <?php }?>
          <p><span class="fa fa-twitter-square"></span> <a href="http://twitter.com/asnagy">@asnagy</a></p>
          <p><span class="fa fa-facebook-square"></span> <a href="http://www.facebook.com/asnagy">Facebook</a></p>
          <p><span class="fa fa-instagram"></span> <a href="http://instagram.com/asnagy">Instagram</a></p>
        </div>
      
        <div class="col-md-6 feed-main">
          <h2>My Destinations</h2>
          <div id="map-container"></div>
        </div>
        
        <div class="col-md-4">

          <div class="media feed-main">
            
            <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['visitList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/50x50&text=<?php echo $_smarty_tpl->tpl_vars['visit']->value->city;?>
" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['visit']->value->city;?>
">
            </a>
            <div class="media-body">
              <h4 class="media-heading"><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['visit']->value->city_id;?>
"><?php echo $_smarty_tpl->tpl_vars['visit']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['visit']->value->country;?>
</a> <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></h4>
              <p><span class="badge">16 Visits</span>  <span class="badge">4 Reviews</span></p>
              <div class="row">
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 1" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 2" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 3" width="50" alt="Thumbnail"></a>
                </div>
                <div class="col-xs-6 col-md-3">
                  <a href="#" class="thumbnail"><img class="media-object" src="http://placehold.it/50x50&text=Image 4" width="50" alt="Thumbnail"></a>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>                

        </div>
        
      </div>
    </div>
    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>     
      function init_map() {
        var var_location = new google.maps.LatLng(39.930538,-75.146484);
        var var_mapoptions = {
          center: var_location,
          zoom: 1,
          mapTypeControl: false,
          panControl:false,
          rotateControl:false,
          streetViewControl: false,          
        };
        var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
        
        var marker;
        var markers = new Array();
        
        <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['visitList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['visit']->value->latitude;?>
,<?php echo $_smarty_tpl->tpl_vars['visit']->value->longitude;?>
),
            map: var_map,
            title:"<?php echo $_smarty_tpl->tpl_vars['visit']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['visit']->value->country;?>
"});
        markers.push(marker);        
        <?php } ?>
        
        var homePin = new google.maps.MarkerImage('/img/home-pin.png', null, null, null, new google.maps.Size(50, 50));
        marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            icon: homePin,
            zIndex: google.maps.Marker.MAX_ZINDEX + 1,
            title:"Hometown"});
        markers.push(marker);        

      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
    </script>        <?php }} ?>
