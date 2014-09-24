<?php /* Smarty version Smarty-3.1.19, created on 2014-09-06 01:04:57
         compiled from "/Library/WebServer/Documents/trip/services/cronjob/templates/instagram.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1513235332540a2af56da667-73189840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a75c807110086165b3240144952953c018a8ca3' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/cronjob/templates/instagram.tpl',
      1 => 1409965176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513235332540a2af56da667-73189840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540a2af56ee6d9_91464108',
  'variables' => 
  array (
    'cityList' => 0,
    'post' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540a2af56ee6d9_91464108')) {function content_540a2af56ee6d9_91464108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/share/pear/Smarty/plugins/modifier.date_format.php';
?><div class="well">
<h3>You've recently traveled!</p>

<ul class="media-list feed-main">
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['post']->value['city']->id;?>
.jpg" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['city']->value->id;?>
">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><a href="/destination/<?php echo $_smarty_tpl->tpl_vars['post']->value['city']->id;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['city']->city;?>
</a></h4>
      <p class="feed-post-meta text-muted"><small><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['visited']);?>
</small></p>  
      <div>
        <a href="#" class="btn btn-default btn-sm pull-right"><span class="fa fa-times"></span> No, I did not.</a>
        <a href="#" class="btn btn-primary btn-sm"><span class="fa fa-map-marker"></span> Tag <?php echo $_smarty_tpl->tpl_vars['post']->value['city']->city;?>
</a>
        <a href="#" class="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o"></span> Review <?php echo $_smarty_tpl->tpl_vars['post']->value['city']->city;?>
</a>
      </div>
    </div>
  </li>
<?php } ?>
</ul>

</div>

<div <?php }} ?>
