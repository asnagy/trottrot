<?php /* Smarty version Smarty-3.1.19, created on 2014-09-03 23:31:46
         compiled from "/Library/WebServer/Documents/trip/interface/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158634967053e29a5f595e48-02230426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53e8cb397225ac3231321f52aab4bcb2bcd1910' => 
    array (
      0 => '/Library/WebServer/Documents/trip/interface/templates/error.tpl',
      1 => 1409786925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158634967053e29a5f595e48-02230426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e29a5f63d223_13999575',
  'variables' => 
  array (
    'error' => 0,
    'stackTrace' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e29a5f63d223_13999575')) {function content_53e29a5f63d223_13999575($_smarty_tpl) {?><div class="container">
  <div align="center">
    <h2>Oh no! An error has occured.</h2>
    <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> <?php echo $_smarty_tpl->tpl_vars['error']->value->getMessage();?>
</div>
    <p class="errorStmt"><?php echo $_smarty_tpl->tpl_vars['error']->value->getDebugInfo();?>
</p>
    <pre align="left"><?php echo $_smarty_tpl->tpl_vars['stackTrace']->value;?>
</pre>
  </div>
</div><?php }} ?>
