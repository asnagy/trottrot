<?php /* Smarty version Smarty-3.1.19, created on 2014-09-18 12:03:39
         compiled from "/Library/WebServer/Documents/trip/services/destination/templates/review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25539049253ead4663f9ee3-19760178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de15fd8aa52da147f4ac808c988f1934ca728ab' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/destination/templates/review.tpl',
      1 => 1411041817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25539049253ead4663f9ee3-19760178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ead466442528_81591732',
  'variables' => 
  array (
    'bgimage' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ead466442528_81591732')) {function content_53ead466442528_81591732($_smarty_tpl) {?>    <!-- Profile Banner -->
    <div class="jumbotron" id="jumbotron" style="color:#fff; text-shadow:2px 2px #000; background-attachment:scroll; background-position:0% 0%; background-image:url('<?php echo $_smarty_tpl->tpl_vars['bgimage']->value;?>
');">
      <div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
</h1>
      </div>
    </div>

    <!-- Profile Nav -->
    <div id="nav-destination">
    <div class="navbar navbar-default navbar-static" role="navigation" style="margin-bottom:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="destination.html"><?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['city']->value->country;?>
</a>
        </div>
      
        <ul class="nav navbar-nav">
          <li class="active"><a href="#"><span class="fa fa-map-marker"></span> 27 Itineraries</a></li>
          <li><a href="#"><span class="fa fa-file-text"></span> 73 Reviews</a></li>
          <li><a href="#"><span class="fa fa-camera"></span> 862 Photos</a></li>
          <li><a href="#"><span class="fa fa-users"></span> 17 Friends</a></li>
        </ul>
      </div>
    </div>
    </div>

    <div class="container container-body">
      
      <form role="form">
        <div class="form-group">
          <label for="reviewTitle" class="sr-only">Review Title</label>
          <input type="text" class="form-control" name="reviewTitle" id="reviewTitle" placeholder="review title">
        </div>
        <div class="form-group">
          <label for="rating" class="sr-only">Rating</label>
          <div class="radio">
            <label><input type="radio" name="rating" id="rating" value="1" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="2" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="3" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="4" class="hidden"><span class="fa fa-star-o"></span></label>
            <label><input type="radio" name="rating" id="rating" value="5" class="hidden"><span class="fa fa-star-o"></span></label>
          </div>
        </div>
        <div class="form-group">
          <label for="visitDate">Dates</label>
          <input type="date" name="startDate" id="visitDate">
          <input type="date" name="endDate" id="visitDate">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Why you liked <?php echo $_smarty_tpl->tpl_vars['city']->value->city;?>
</label>
          <textarea class="form-control" name="review" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-info btn-sm">Submit</button>
      </form>
      
    </div><?php }} ?>
