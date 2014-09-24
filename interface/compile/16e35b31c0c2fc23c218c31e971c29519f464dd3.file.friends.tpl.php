<?php /* Smarty version Smarty-3.1.19, created on 2014-08-21 05:53:58
         compiled from "/Library/WebServer/Documents/trip/services/destination/templates/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50173802253f56bcbb80b97-14706669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e35b31c0c2fc23c218c31e971c29519f464dd3' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/destination/templates/friends.tpl',
      1 => 1408593234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50173802253f56bcbb80b97-14706669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f56bcbc86f05_41894295',
  'variables' => 
  array (
    'bgimage' => 0,
    'city' => 0,
    'id' => 0,
    'user' => 0,
    'friendList' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f56bcbc86f05_41894295')) {function content_53f56bcbc86f05_41894295($_smarty_tpl) {?>    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="background-attachment:scroll; background-position:0% 0%; background-image:url('<?php echo $_smarty_tpl->tpl_vars['bgimage']->value;?>
'); padding-bottom:0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1 style="color:#fff; text-shadow:2px 2px #000;"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
</h1>
            <div class="pull-right" style="position:relative; top:-20px;">
              <?php if ($_smarty_tpl->tpl_vars['user']->value->hasVisited($_smarty_tpl->tpl_vars['id']->value)) {?>
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
          <a class="navbar-brand" href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['city']->value->country;?>
</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/friends"><span class="fa fa-users"></span> <?php echo count($_smarty_tpl->tpl_vars['friendList']->value);?>
 Friends</a></li>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
"><span class="fa fa-map-marker"></span> 27 Itineraries</a></li>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/reviews"><span class="fa fa-file-text"></span> 73 Reviews</a></li>
          <li><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
/photos"><span class="fa fa-camera"></span> 862 Photos</a></li>
        </ul>
      </div>
    </div>
    </div>

    <!-- My Destinations -->
    <div class="container l">
      <div class="row">

        <div class="col-md-2 col1">
          <?php if ($_smarty_tpl->tpl_vars['user']->value->hasVisited($_smarty_tpl->tpl_vars['id']->value)) {?>
          <p><button class="btn btn-success btn-sm btn-block"><span class="fa fa-check"></span> Visited</button></p>
          <?php } else { ?>
          <p><a href="#" class="btn btn-info btn-sm btn-block" data-loading-text="Saving..." onClick="beenThere('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;" id="beenThere"><span class="fa fa-thumb-tack"></span> I've Been Here</a></p>
          <?php }?>
          <p><a href="/itinerary/new?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-info btn-sm btn-block"><span class="fa fa-pencil-square-o"></span> Start an Itinerary</a></p>
        </div>
      
        <div class="col-md-7 feed-main">
          <h2>Friends that have been to <?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
</h2>
          
          <ul class="media-list feed-main">
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
            <li class="media">
              <a class="pull-left" href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
">
                <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->user_id;?>
.jpg" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value->lname;?>
</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
              </div>
            </li>
            <?php } ?>
          </ul>            
          
        </div>
        
        <div class="col-md-3">
          AD SPACE
        </div>
        
      </div>
    </div><?php }} ?>
