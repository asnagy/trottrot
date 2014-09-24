<?php /* Smarty version Smarty-3.1.19, created on 2014-09-17 00:36:21
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/requests.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92146097953ec19c98f03b7-01207112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6fc275419af9c22dfe1ad89ed6321063a6bab22' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/requests.tpl',
      1 => 1410914137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92146097953ec19c98f03b7-01207112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ec19c9a3a391_07921844',
  'variables' => 
  array (
    'list' => 0,
    'friend' => 0,
    'friendList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ec19c9a3a391_07921844')) {function content_53ec19c9a3a391_07921844($_smarty_tpl) {?><div class="container container-body">

  <div class="row">
    
    <div class="col-md-8">
      <h3>You have <?php echo count($_smarty_tpl->tpl_vars['list']->value);?>
 new friend requests</h3>
      
      <div class="list-group">
        <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
        <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
" class="list-group-item">
          <div class="pull-right">
            <button class="btn btn-info btn-sm">Approve <span class="fa fa-check"></span></button>
            <button class="btn btn-default btn-sm">Ignore <span class="fa fa-times"></span></button>
          </div>
          <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
.jpg" width="50" class="pull-left" style="margin-right:1em;">
          <h4 class="list-group-item-heading"> <?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value->lname;?>
</h4>
          <p class="list-group-item-text clearfix">
            <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['friend']->value->getItineraries());?>
</span> Itineraries
            <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['friend']->value->getFriends());?>
</span> Friends
            <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['friend']->value->getVisits());?>
</span> Cities
          </p>
        </a>
        <?php } ?>
      </div>
    </div>
    
    <div class="col-md-4" style="background-color:#fff;">
      <h3>Travelers You May Know</h3>
    
      <?php if ($_smarty_tpl->tpl_vars['friendList']->value) {?>
      <ul class="media-list">
        <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
        <li class="media">
          <button class="btn btn-info btn-xs btn-follow pull-right" onClick="follow('<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
');"><span class="fa fa-plus-square"></span> Follow</button>
          <a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
" class="pull-left">
            <img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
.jpg" width="50" class="img-rounded pull-left" style="margin-right:1em;">
          </a>
          <div class="media-body">
            <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['friend']->value->lname;?>
</a></h4>
            <p class="text-muted small">
              <span class="badge">47</span> Itineraries
              <span class="badge">23</span> Friends
              <span class="badge">65</span> Cities
            </p>
          </div>
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
      
</div><?php }} ?>
