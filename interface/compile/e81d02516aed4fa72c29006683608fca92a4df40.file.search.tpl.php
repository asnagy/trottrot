<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 02:11:28
         compiled from "/Library/WebServer/Documents/trip/services/destination/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184191498053ec2870353789-74099721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81d02516aed4fa72c29006683608fca92a4df40' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/destination/templates/search.tpl',
      1 => 1410919887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184191498053ec2870353789-74099721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ec2870401ff7_92237425',
  'variables' => 
  array (
    'query' => 0,
    'list' => 0,
    'city' => 0,
    'nextPg' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ec2870401ff7_92237425')) {function content_53ec2870401ff7_92237425($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/usr/share/pear/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/usr/share/pear/Smarty/plugins/modifier.truncate.php';
?>    <div class="container container-body">

      <div class="row">
      
        <div class="col-md-7">
        <div class="panel" style="padding:1em;">

          <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>
          <p>Your search for <strong><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</strong></p>
          <?php } else { ?>
          <h3>Browse Top Destinations</h3>
          <?php }?>
        
          <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
          <ul class="media-list feed-main infinite-container">
            <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
            <li class="media infinite-item">
              <a class="pull-left" href="/destination/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->city,' ','_');?>
-<?php if ($_smarty_tpl->tpl_vars['city']->value->country=="United States") {?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->region,' ','_');?>
-<?php }?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->country,' ','_');?>
">
                <img class="media-object" src="http://placehold.it/100x100&text=<?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
" width="100" alt="<?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/destination/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->city,' ','_');?>
-<?php if ($_smarty_tpl->tpl_vars['city']->value->country=="United States") {?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->region,' ','_');?>
-<?php }?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->country,' ','_');?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
, <?php if ($_smarty_tpl->tpl_vars['city']->value->country=="United States") {?><?php echo $_smarty_tpl->tpl_vars['city']->value->region;?>
, <?php }?><?php echo $_smarty_tpl->tpl_vars['city']->value->country;?>
</a></h4>
                <p class="feed-post-meta text-muted"><small><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['city']->value->abstract,180,"...",false);?>
</small></p>  
                <a class="text-success" href="/destination/<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->city,' ','_');?>
-<?php if ($_smarty_tpl->tpl_vars['city']->value->country=="United States") {?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->region,' ','_');?>
-<?php }?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['city']->value->country,' ','_');?>
#itinerary"><span class="fa fa-caret-right"></span> <small>8 trips in your network</small></a>
              </div>
            </li>
            <?php } ?>
            <?php if (count($_smarty_tpl->tpl_vars['list']->value)==10) {?>
            <li class="infinite-loading text-center text-muted"><span class="fa fa-circle-o-notch fa-spin"></span> <small>Loading More Results...</small></li>
            <?php }?>
          </ul>
          <?php if (count($_smarty_tpl->tpl_vars['list']->value)==10) {?>
          <a href="/destination/search?q=<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
&pg=<?php echo $_smarty_tpl->tpl_vars['nextPg']->value;?>
" class="infinite-more-link text-center">More</a>
          <?php }?>
          <?php } else { ?>
          <div class="alert alert-warning" role="alert"><strong>No results found!</strong></div>
          <div class="well">
            <strong>Now What?</strong>
            <ul>
              <li><a href="#">Request this destination to be added</a></li>
              <li>Check your spelling</li>
              <li>Try searching for a country or city</li>
            </ul>
          </div>
          <?php }?>
        
        </div>
        </div>
        
        <div class="col-md-5">
        <div style="padding:1em;">
          <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
          <div class="well">
            <h2>Connect on TrotTrot</h2>
            <p>Connect with friends on TrotTrot to find trusted reviews and discover your next desitination!</p>
            <hr>
            <a class="btn btn-default btn-block" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</a>
            <a href="/account/new" class="btn btn-primary btn-block"><span class="fa fa-user fa-lg"></span> &nbsp; Create Account</a>
          </div>
          <?php } else { ?>
          <h4>Trending Destinations</h4>
          <div id="map-container"></div>

          <h4>Travelers You May Know</h4>
          <ul class="media-list">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">3rd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
          </ul>
          <?php }?>
        </div>
        </div>
        
      </div>
    </div>
<?php }} ?>
