<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 04:17:16
         compiled from "/Library/WebServer/Documents/trip/services/profile/templates/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14466796953f2bd67d63d06-25835229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e6376bbeedd172027943767f959be5a7a1dc1ce' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/profile/templates/friends.tpl',
      1 => 1409025425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14466796953f2bd67d63d06-25835229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2bd67e46f11_84524727',
  'variables' => 
  array (
    'profileUser' => 0,
    'friendList' => 0,
    'visitList' => 0,
    'countryList' => 0,
    'itinCount' => 0,
    'user' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2bd67e46f11_84524727')) {function content_53f2bd67e46f11_84524727($_smarty_tpl) {?>    <!-- Profile Banner -->
    <div class="banner">
      <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->fname;?>
's Profile Picture" style="max-width:220px; max-height:300px;">
    </div>

    <!-- Profile Nav -->
    <div class="navbar navbar-default" style="padding-left: 350px; margin-bottom:20px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['profileUser']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['profileUser']->value->lname;?>
</a>
        <ul class="nav navbar-nav">
          <li><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['profileUser']->value->id;?>
/friends" class="active"><?php echo count($_smarty_tpl->tpl_vars['friendList']->value);?>
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
          <h2>My Friends</h2>
          <div class="media feed-main">
            
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
            <a class="pull-left" href="#">
              <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
.jpg" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value->name;?>
's Profile Photo">
            </a>
            <div class="media-body">
              <a href="#" class="btn btn-success btn-sm pull-right"><span class="fa fa-check"> Following</a>
              <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value->lname;?>
</a></h4>
              <p><span class="badge">16 Reviews</span>  <span class="badge">4 Itineraries</span></p>
            </div>
            <?php } ?>

          </div>                
        </div>
        
        <div class="col-md-4">


        </div>
        
      </div>
    </div>
<?php }} ?>
