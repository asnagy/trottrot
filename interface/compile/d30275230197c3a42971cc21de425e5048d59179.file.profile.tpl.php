<?php /* Smarty version Smarty-3.1.19, created on 2014-09-10 12:00:18
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149459644553e97a429d2628-73240398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30275230197c3a42971cc21de425e5048d59179' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/profile.tpl',
      1 => 1410350413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149459644553e97a429d2628-73240398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e97a42a105f3_53364857',
  'variables' => 
  array (
    'user' => 0,
    'updateStatus' => 0,
    'instagramThumbnail' => 0,
    'instagramName' => 0,
    'friendList' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e97a42a105f3_53364857')) {function content_53e97a42a105f3_53364857($_smarty_tpl) {?><link href="/css/cropper.css" rel="stylesheet">

<div class="container" style="background-color:#fff;">
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
        <div class="row">
          <div class="col-md-4">
            <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
's Profile Photo" style="max-width:220px; max-height:300px;">
            <div class="dropdown">
              <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:200px;">Change Photo <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#photoModal">Upload File</a></li>
              </ul>
            </div>
            
          </div>
          <div class="col-md-8">
            <form class="form-horizontal" role="form" action="/account/profile" method="post">
              <fieldset>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->fname!='') {?>
                <div class="form-group">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
">
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group has-error has-feedback">
                  <label for="fname" class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->lname!='') {?>
                <div class="form-group">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lname;?>
">
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group has-error has-feedback">
                  <label for="lname" class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lname;?>
">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                <?php }?>
                <div class="form-group">
                  <label for="nickname" class="col-lg-3 control-label">Nickname</label>
                  <div class="col-lg-9">          
                    <input type="text" class="form-control" id="email" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->nickname;?>
">
                  </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->email!='') {?>
                <div class="form-group">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group has-error has-feedback">
                  <label for="email" class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                  </div>
                </div>
                <?php }?>
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label">Home Airport</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="airport" name="airport" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->airport;?>
">
                  </div>
                </div>
                <div class="form-group">
                  <div class="tt-input-group">
                  <label for="airport" class="col-lg-3 control-label">Home Town</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control autocomplete" id="hometown" name="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->hometown;?>
" autocomplete="off">
                  </div>
                  </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->instagram_id!='') {?>
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label"><span class="fa fa-instagram"></span> Instagram Account</label>
                  <div class="col-lg-9">  
                    <img src="<?php echo $_smarty_tpl->tpl_vars['instagramThumbnail']->value;?>
" class="img-rounded"> <?php echo $_smarty_tpl->tpl_vars['instagramName']->value;?>
<br><a href="#">Remove</a>
                  </div>
                </div>
                <?php } else { ?>
                <div class="form-group">
                  <label for="airport" class="col-lg-3 control-label"><span class="fa fa-instagram"></span> Instagram Username</label>
                  <div class="col-lg-9">  
                    <input type="text" class="form-control" id="instagram" name="instagram">
                  </div>
                </div>
                <?php }?>
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
  
    <div class="col-md-4">
      <h3>Connect with other travelers</h3>
    
      <?php if ($_smarty_tpl->tpl_vars['friendList']->value) {?>
      <div class="list-group">
        <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
        <div class="list-group-item">
          <!--<button type="submit" class="btn btn-info btn-sm pull-right"><span class="fa fa-plus-square"></span></button>-->
          <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
.jpg" width="50" class="img-rounded pull-left" style="margin-right:1em;">
          <h4 class="list-group-item-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value->lname;?>
</a></h4>
          <p class="list-group-item-text clearfix">
            <span class="badge">47</span> Itineraries
            <span class="badge">23</span> Friends
            <span class="badge">65</span> Cities
          </p>
        </a>
        <button class="btn btn-primary btn-xs btn-follow" onClick="follow('<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
');">Follow</button>
        </div>
        <?php } ?>
      </div>
      <?php } else { ?>
      <div class="well">
        <p>Connect your facebook account to find new connections on TrotTrot</p>
        <button type="submit" class="btn btn-default btn-block" style="color:#3b5998;" onclick="fb_login(); return false;"><span class="fa fa-facebook-square fa-lg"></span> &nbsp; Log In with Facebook</button>
        <strong>OR</strong>
        <p>Search for friends on TrotTrot</p>
        <form role="form" method="post" action="/profile/search">
          <div class="form-group">
            <input name="q" type="text" class="form-control" id="friendSearch" placeholder="Friend's name...">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>        
      </div>
      <?php }?>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="PhotoModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Profile Photo</h4>
      </div>
      <div class="modal-body">
        
        <form class="form" method="post" action="/account/profile" enctype="multipart/form-data">
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
            <img data-src="holder.js/100%x100%" alt="...">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
          <div>
            <span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="profile_photo"></span>
            <a href="#" class="btn btn-default btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>
        <div class="form-group text-right">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        
      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      -->
    </div>
  </div>
</div>

<script src="/js/cropper.js"></script>     

<?php }} ?>
