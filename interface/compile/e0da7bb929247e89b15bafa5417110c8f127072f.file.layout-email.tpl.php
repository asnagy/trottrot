<?php /* Smarty version Smarty-3.1.19, created on 2014-09-10 12:39:23
         compiled from "/Library/WebServer/Documents/trip/interface/templates/layout-email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379886517540a2af563afb0-34541833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0da7bb929247e89b15bafa5417110c8f127072f' => 
    array (
      0 => '/Library/WebServer/Documents/trip/interface/templates/layout-email.tpl',
      1 => 1410352699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379886517540a2af563afb0-34541833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540a2af56be772_00870113',
  'variables' => 
  array (
    'language' => 0,
    'pageTemplate' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540a2af56be772_00870113')) {function content_540a2af56be772_00870113($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrotTrot</title>
    
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

    <!-- Yeti Bootstrap Theme -->
    <link href="//trottrot.com/css/bootstrap-yeti.min.css" rel="stylesheet">

    <!-- Custom style for autocomplete -->
    <link href="//trottrot.com/css/typeahead.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="//trottrot.com/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://trottrot.com">TrotTrot</a>
        </div>      
      </div>
    </nav>

    <?php if ($_smarty_tpl->tpl_vars['pageTemplate']->value=="error") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../interface/templates/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../services/".((string)$_smarty_tpl->tpl_vars['module']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['pageTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>    

    <div class="navbar navbar-default footer">
      <div class="container">
        <ul class="nav nav-pills">
          <li><a href="http://trottrot.com/account/settings?unsubscribe=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">Unsubscribe</a></li>
          <li><a href="http://trottrot.com/account/settings">My Account</a></li>
        </ul>
        <p class="text-center text-muted">&copy; Copyright TrotTrot 2014.</p>
      </div>
    </div>
    
  </body>
</html><?php }} ?>
