<?php /* Smarty version Smarty-3.1.19, created on 2014-08-26 05:09:11
         compiled from "/Library/WebServer/Documents/trip/services/profile/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130685815753fc10b0a76189-86834624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33c1cc6426bd3cde3284c9060edee190194b507c' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/profile/templates/search.tpl',
      1 => 1409029747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130685815753fc10b0a76189-86834624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fc10b0ac8507_21813763',
  'variables' => 
  array (
    'query' => 0,
    'userList' => 0,
    'resultUser' => 0,
    'user' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fc10b0ac8507_21813763')) {function content_53fc10b0ac8507_21813763($_smarty_tpl) {?>    <!-- My Destinations -->
    <div class="container">
      <div class="row">

        <div class="col-md-2 col1">
        </div>
      
        <div class="col-md-6 feed-main">
          <h2>Search for <strong><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</strong></h2>
          <div class="media feed-main">
            
            <?php  $_smarty_tpl->tpl_vars['resultUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resultUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resultUser']->key => $_smarty_tpl->tpl_vars['resultUser']->value) {
$_smarty_tpl->tpl_vars['resultUser']->_loop = true;
?>
            <a class="pull-left" href="#">
              <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['resultUser']->value->id;?>
.jpg" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['resultUser']->value->name;?>
's Profile Photo">
            </a>
            <div class="media-body">
              <?php if ($_smarty_tpl->tpl_vars['user']->value->isFollowing($_smarty_tpl->tpl_vars['resultUser']->value)) {?>
              <button class="btn btn-success btn-sm pull-right" style="pointer-events: none;"><span class="fa fa-check"> Following</button>
              <?php } else { ?>
              <button class="btn btn-primary btn-sm btn-follow pull-right" onClick="beenThere('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;"><span class="fa fa-plus"> Follow</button>
              <?php }?>
              <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['resultUser']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['resultUser']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['resultUser']->value->lname;?>
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
