<?php /* Smarty version Smarty-3.1.19, created on 2014-08-13 04:25:58
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164932362753eacbc083ff35-17464692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e36f93a6bfe0e3273051aa383192b8eefd39dd' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/settings.tpl',
      1 => 1407896749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164932362753eacbc083ff35-17464692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53eacbc0920c79_26750646',
  'variables' => 
  array (
    'user' => 0,
    'updateStatus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53eacbc0920c79_26750646')) {function content_53eacbc0920c79_26750646($_smarty_tpl) {?><div class="container" style="background-color:#fff;">
  <div class="row">
    
    <div class="col-md-8">
      <h3>Hello <?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
!</h3>
      
      <?php if (isset($_smarty_tpl->tpl_vars['updateStatus']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['updateStatus']->value) {?>
      <div class="alert alert-success" role="alert"><span class="fa fa-check"></span> Your profile has been updated.</div>
        <?php } else { ?>
      <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> Your profile updated failed.</div>
        <?php }?>
      <?php }?>

      <div class="well">
            <form class="form-horizontal" role="form" action="/account/settings" method="post">
              <fieldset>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Account Visibility</label>
                  <div class="col-lg-9">
                    <div class="radio">
                      <label><input type="radio" name="status" value="0"<?php if (!$_smarty_tpl->tpl_vars['user']->value->status) {?>checked="true"<?php }?>> Public
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="status" value="1"<?php if ($_smarty_tpl->tpl_vars['user']->value->status) {?>checked="true"<?php }?>> Private
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-info btn-sm">Save</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
      </div>
      
    </div>
  

  </div>
</div>
<?php }} ?>
