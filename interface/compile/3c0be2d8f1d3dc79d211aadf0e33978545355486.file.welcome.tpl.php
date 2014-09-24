<?php /* Smarty version Smarty-3.1.19, created on 2014-08-07 04:23:28
         compiled from "/Library/WebServer/Documents/trip/services/account/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106764967553e29745954407-93584346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0be2d8f1d3dc79d211aadf0e33978545355486' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/account/templates/welcome.tpl',
      1 => 1407378206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106764967553e29745954407-93584346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e2974595a833_33371539',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e2974595a833_33371539')) {function content_53e2974595a833_33371539($_smarty_tpl) {?><div class="container" style="background-color:#fff;">
  <h1>Welcome to TrotTrot!</h1>

  <div class="row">
    
    <div class="col-md-8">
      <h3>Lets get your profile setup</h3>

      <div class="well bs-component">
        <form class="form-horizontal" role="form">
          <fieldset>
            <div class="form-group">
              <label for="profilePicture" class="col-lg-2 control-label">Profile Picture</label>
              <div class="col-lg-10">          
                <input type="file" id="profilePicture" name="profile">
                <p class="help-block">Upload your profile picture (.jpg, .png, .gif)</p>
              </div>
            </div>
            <div class="form-group">
              <label for="profileBanner" class="col-lg-2 control-label">Profile Banner</label>
              <div class="col-lg-10">          
                <input type="file" id="profileBanner" name="banner">
                <p class="help-block">Upload your profile banner picture (.jpg, .png, .gif)</p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </div>
            </div>            
          </fieldset>
        </form>      
      </div>
      
    </div>
  
    <div class="col-md-4">
      <h3>Connect with other travelers</h3>
    
      <div class="list-group">
        <a href="#" class="list-group-item">
          <img src="" width="50">
          <h4 class="list-group-item-heading">Andrew Nagy</h4>
          <p class="list-group-item-text">
            <span class="badge">47</span> Itineraries
            <span class="badge">23</span> Friends
            <span class="badge">65</span> Cities
          </p>
        </a>
        <a href="#" class="list-group-item">
          <img src="" width="50">
          <h4 class="list-group-item-heading">Andrew Nagy</h4>
          <p class="list-group-item-text">
            <span class="badge">47</span> Itineraries
            <span class="badge">23</span> Friends
            <span class="badge">65</span> Cities
          </p>
        </a>
        <a href="#" class="list-group-item">
          <img src="" width="50">
          <h4 class="list-group-item-heading">Andrew Nagy</h4>
          <p class="list-group-item-text">
            <span class="badge">47</span> Itineraries
            <span class="badge">23</span> Friends
            <span class="badge">65</span> Cities
          </p>
        </a>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
