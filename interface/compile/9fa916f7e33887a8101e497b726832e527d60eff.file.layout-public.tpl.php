<?php /* Smarty version Smarty-3.1.19, created on 2014-09-03 23:31:46
         compiled from "/Library/WebServer/Documents/trip/interface/templates/layout-public.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92498245853e29e198c8899-41065843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa916f7e33887a8101e497b726832e527d60eff' => 
    array (
      0 => '/Library/WebServer/Documents/trip/interface/templates/layout-public.tpl',
      1 => 1409787104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92498245853e29e198c8899-41065843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e29e19948c31_43367304',
  'variables' => 
  array (
    'language' => 0,
    'pageTemplate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e29e19948c31_43367304')) {function content_53e29e19948c31_43367304($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrotTrot</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

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
  <body>

    <div id="wrap">
    
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://trottrot.com">TrotTrot</a>
        </div>

        <div class="collapse navbar-collapse" id=".navbar-inverse-collapse">

          <form class="navbar-form navbar-right" role="form" action="/feed" method="post">
            <div class="form-group">
              <label class="sr-only" for="LoginEmail">Email</label>
              <input name="email" type="email" class="form-control input-sm" id="LoginEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="LoginPassword">Password</label>
              <input name="password" type="password" class="form-control input-sm" id="LoginPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-info btn-sm">Sign in</button>
          </form>            

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign Up <strong class="caret"></strong></a>
              <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                <form class="form" action="/account/new" method="post">
                  <fieldset>
                    <div class="form-group">
                      <button type="button" class="btn btn-default btn-block" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</button>
                      <button type="button" class="btn btn-default btn-block"><span class="fa fa-google-plus fa-lg" style="color:#900;"></span> &nbsp; Log In with Google</button>
                    </div>
                    <p style="text-align: center;"><small>OR</small</p>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" name="fname" id="inputFirst" placeholder="first name">
                        <span class="input-group-addon fa fa-user"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" name="lname" id="inputLast" placeholder="last name">
                        <span class="input-group-addon fa fa-user"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="email">
                        <span class="input-group-addon fa fa-envelope"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="password">
                        <span class="input-group-addon fa fa-lock"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="password" class="form-control" name="password2" id="inputPassword2" placeholder="confirm password">
                        <span class="input-group-addon fa fa-lock"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-info btn-block">Create Your Account</button>
                    </div>
                  </fieldset>
                </form>              
              </div> 
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->

      </div><!-- /.container-fluid -->
    </nav>    

    <?php if ($_smarty_tpl->tpl_vars['pageTemplate']->value=="error") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../interface/templates/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("../../services/".((string)$_smarty_tpl->tpl_vars['module']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['pageTemplate']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>    

  </div>
    
    
<div class="navbar navbar-default footer">
  <div class="container nav-centered">
    <ul class="nav nav-pills">
      <li><a href="/about">About</a></li>
      <li><a href="/about/terms">Terms</a></li>
      <li><a href="/about/privacy">Privacy</a></li>
      <li><a href="/about/cookies">Cookies</a></li>                
    </ul>
    <p class="text-center text-muted">&copy; Copyright TrotTrot 2014.</p>
    <!--<p class="text-center text-muted"><small>Proudly made in the Greater Philadelphia Area.</small><br><img src="/img/philly_love.png" width="24" alt="Philadelphia Love"></p>-->
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/typeahead.js/0.9.3/typeahead.min.js"></script>
    <script src="/js/handlebars-v1.3.0.js"></script> 
    <script src="/js/waypoints-infinite.min.js"></script>
    <script src="/js/facebook.js"></script> 
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
