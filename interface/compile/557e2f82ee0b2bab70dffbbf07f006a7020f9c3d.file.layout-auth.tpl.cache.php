<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 14:52:00
         compiled from "/Library/WebServer/Documents/trip/interface/templates/layout-auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:628737367541c431080dd11-41096687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557e2f82ee0b2bab70dffbbf07f006a7020f9c3d' => 
    array (
      0 => '/Library/WebServer/Documents/trip/interface/templates/layout-auth.tpl',
      1 => 1411134156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628737367541c431080dd11-41096687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'pageTitle' => 0,
    'user' => 0,
    'pageTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c43109281d7_88319245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c43109281d7_88319245')) {function content_541c43109281d7_88319245($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['pageTitle']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 - TrotTrot<?php } else { ?>TrotTrot<?php }?></title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Addons to bootstrap from Jasny -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

    <!-- Font Awesome Icons -->    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

    <!-- Yeti Bootstrap Theme -->
    <link href="/css/bootstrap-yeti.min.css" rel="stylesheet">
    
    <!-- Custom style for autocomplete -->
    <link href="/css/typeahead.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/styles.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="fixedHeader">
  
    <div class="gradient"></div>
  
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/feed">TrotTrot</a>
        </div>

        <div class="collapse navbar-collapse" id=".navbar-inverse-collapse">
        
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/profile"><img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
.jpg" width="22" class="img-circle"> <?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
</a></li>
            <li><a href="/account/friends"><span class="fa fa-users fa-lg"></span> <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['user']->value->getFriendRequests());?>
</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog fa-lg"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/account/profile">Edit Profile</a></li>
                <li><a href="/account/settings">Settings</a></li>
                <li><a href="/help">Help</a></li>
                <li class="divider"></li>
                <li><a href="/account/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          
          <div class="col-sm-4 col-md-4">
            <form class="navbar-form" role="search" method="get" action="/destination/search">
              <div class="input-group-left">
                <span class="fa fa-search"></span>
                <input type="text" class="form-control" name="q" placeholder="where would you like to go?" style="width:400px;">
              </div>
            </form>
          </div>

        </div><!-- /.navbar-collapse -->
        
      </div><!-- /.container-fluid -->
    </nav>

    <?php if ($_smarty_tpl->tpl_vars['pageTemplate']->value=="error") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../interface/templates/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../services/".((string)$_smarty_tpl->tpl_vars['module']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['pageTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php }?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <!-- Addons to bootstrap from Jasny -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/typeahead.js/0.9.3/typeahead.min.js"></script>
    <script src="/js/handlebars-v1.3.0.js"></script> 
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/waypoints-infinite.min.js"></script>
    <script src="/js/local.js"></script>     
    
<script>
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53229572-2', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  
</script>    

  </body>
</html>
<?php }} ?>
