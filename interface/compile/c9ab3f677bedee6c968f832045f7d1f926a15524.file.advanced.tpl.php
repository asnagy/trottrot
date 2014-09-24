<?php /* Smarty version Smarty-3.1.19, created on 2014-08-14 07:40:42
         compiled from "/Library/WebServer/Documents/trip/services/destination/templates/advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86513676053ec4b2a3993b6-64689483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ab3f677bedee6c968f832045f7d1f926a15524' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/destination/templates/advanced.tpl',
      1 => 1407994832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86513676053ec4b2a3993b6-64689483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ec4b2a41ea11_59548105',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ec4b2a41ea11_59548105')) {function content_53ec4b2a41ea11_59548105($_smarty_tpl) {?><div class="container" style="background-color:#fff;">
  <div class="row">
    
    <div class="col-md-8">
      <h3>Destination Search</h3>
      
      <div class="well">
            <form class="form-horizontal" role="form" action="/destination/search" method="post">
              <fieldset>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Continent</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="continent">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Population Size</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="pop_size">
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-lg-3 control-label">Language Spoken</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="language">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-info btn-sm">Search</button>
                  </div>
                </div>            
              </fieldset>
            </form>      
      </div>
      
    </div>
  

  </div>
</div>
<?php }} ?>
