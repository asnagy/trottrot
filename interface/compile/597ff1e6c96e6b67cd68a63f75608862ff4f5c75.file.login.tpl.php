<?php /* Smarty version Smarty-3.1.19, created on 2014-09-15 17:45:58
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72589270453e29ceb059db1-87203404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '597ff1e6c96e6b67cd68a63f75608862ff4f5c75' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/login.tpl',
      1 => 1410803152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72589270453e29ceb059db1-87203404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e29ceb0b0d03_34365876',
  'variables' => 
  array (
    'loginFailure' => 0,
    'userEmail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e29ceb0b0d03_34365876')) {function content_53e29ceb0b0d03_34365876($_smarty_tpl) {?><video class="media-player" autoplay loop id="bgvid">
  <source type="video/mp4" src="http://ak4.picdn.net/shutterstock/videos/2862454/preview/stock-footage-couple-tourists-taking-self-portrait-with-camera-phone-on-hawaii-big-islands-akaka-falls-happy.mp4" />
  <source type="video/webm" src="http://ak4.picdn.net/shutterstock/videos/2862454/preview/stock-footage-couple-tourists-taking-self-portrait-with-camera-phone-on-hawaii-big-islands-akaka-falls-happy.webm" />
</video>

<div style="margin-top:150px; position:relative; background-color:rgba(255,255,255,.8); z-index:10;">
  <div class="row">
    <div class="container">
    
      <div class="col-md-4">
        <h3>Log in</h3>

        <?php if ($_smarty_tpl->tpl_vars['loginFailure']->value) {?>
        <div class="alert alert-danger">The email address and password did not match. Please try again.</div>
        <?php }?>

        <form action="/feed" method="post">
          <div class="form-group">
            <input class="form-control" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['userEmail']->value;?>
" size="50"/>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['loginFailure']->value) {?>
          <div class="form-group has-error has-feedback">
            <input class="form-control" id="inputError2" type="password" name="password" size="50"/>
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
          </div>
          <?php } else { ?>
          <div class="form-group">
            <input class="form-control" type="password" name="password" size="50"/>
          </div>
          <?php }?>
          <div><input type="checkbox" value="stay_logged_in"/> Keep me logged in</div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm">Log in</button>
          </div>
        </form>
      </div>

      <div class="col-md-8">
    
        <h3>Discover your next destination</h3>
        
        <p>
          With Trot Trot, you can connect with your friends and acquaintances to discover 
          destinations, itineraries and reviews from those that you trust. 
          
          Sign up now, its free!
        </p>
        
        <div>
          <button type="button" class="btn btn-default" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</button>
          <button type="button" class="btn btn-default"><span class="fa fa-google-plus fa-lg" style="color:#900;"></span> &nbsp; Log In with Google</button>
        </div>


      </div>
    
    </div>
  </div>
</div><?php }} ?>
