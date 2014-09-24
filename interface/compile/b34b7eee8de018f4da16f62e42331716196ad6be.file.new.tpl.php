<?php /* Smarty version Smarty-3.1.19, created on 2014-08-14 07:21:20
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191427749853ec103f34c150-31207010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34b7eee8de018f4da16f62e42331716196ad6be' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/new.tpl',
      1 => 1407993666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191427749853ec103f34c150-31207010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ec103f480f46_26361401',
  'variables' => 
  array (
    'failed' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ec103f480f46_26361401')) {function content_53ec103f480f46_26361401($_smarty_tpl) {?><div class="container" style="background-color:#fff;">
      <h1>Welcome to TrotTrot!</h1>

      <div class="alert alert-info" role="alert"><strong>TrotTrot is in Beta!</strong> You will need to use a valid beta code in order to create an account.</div>

      <?php if ($_smarty_tpl->tpl_vars['failed']->value=='email_exist') {?>
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! This email address is already registered.</div>
      <?php } elseif ($_smarty_tpl->tpl_vars['failed']->value=='email_invalid') {?>
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The email address is incorrect.</div>
      <?php } elseif ($_smarty_tpl->tpl_vars['failed']->value=='password') {?>
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The password must be at least 8 characters.</div>
      <?php } elseif ($_smarty_tpl->tpl_vars['failed']->value=='beta') {?>
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Warning! The beta code is invalid.</div>
      <?php }?>

      <div class="well">
            <form class="form-horizontal" role="form" action="/account/profile" method="post">
              <fieldset>
                <?php if ($_smarty_tpl->tpl_vars['failed']->value=='beta') {?>
                <div class="form-group has-error has-feedback" style="border-bottom:1px solid #ccc; margin-bottom:1em;">
                  <label for="beta" class="col-lg-3 control-label">Beta Code</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="beta" name="beta">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>                    
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group" style="border-bottom:1px solid #ccc; padding-bottom:1em; margin-bottom:1em;">
                  <label for="beta" class="col-lg-3 control-label">Beta Code</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="beta" name="beta">
                  </div>
                </div>                
                <?php }?>
                <div class="form-group">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lname;?>
">
                  </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['failed']->value=='email_exist'||$_smarty_tpl->tpl_vars['failed']->value=='email_invalid') {?>
                <div class="form-group has-error has-feedback">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                  </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['failed']->value=='password') {?>
                <div class="form-group has-error has-feedback">
                  <label for="password" class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group">
                  <label for="password" class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
">
                  </div>
                </div>
                <?php }?>
                <div class="form-group">
                  <label for="password" class="col-lg-3 control-label">Password Again</label>
                  <div class="col-lg-9">  
                    <input type="password" class="form-control" id="password2" name="password2">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
      </div>
      
</div><?php }} ?>
