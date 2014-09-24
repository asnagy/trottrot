<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 13:35:46
         compiled from "/Library/WebServer/Documents/trip/services/itinerary/templates/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1960252853f17f1c9ded34-83095594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0c8818e39e1c1b131128af0c1da4c6996aa8ed' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/itinerary/templates/new.tpl',
      1 => 1410923337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1960252853f17f1c9ded34-83095594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f17f1ca5bb70_03129924',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f17f1ca5bb70_03129924')) {function content_53f17f1ca5bb70_03129924($_smarty_tpl) {?>    <div class="container container-body">
      <div class="controls">
      
      <h3>Itinerary</h3>
      
      <form role="form" method="POST" action="/profile/itineraries">
        <div class="form-group">
          <label class="sr-only" for="itineraryTitle">Itinerary Title</label>
          <input type="text" class="form-control" name="itineraryTitle" id="itineraryTitle" placeholder="title, example: Our Honeymoon">
        </div>
        <div class="panel panel-default entry">
          <div class="panel-heading">
            Destination
            <button class="pull-right btn btn-success btn-add btn-xs" type="button"><span class="glyphicon glyphicon-plus"></span> Add</button>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="sr-only" for="destination">Destination</label>
              <input type="hidden" name="hiddenId[]" value="">
              <input type="text" class="form-control autocomplete" name="destination[]" data-provide="typeahead" autocomplete="off" id="destination" placeholder="destination">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-4">
                  <label for="itineraryStart" class="sr-only">Start</label>
                  <div class="input-append date" id="datepicker1" data-date-format="dd/mm/yyyy">
                    <input type="text" name="startdate[]" placeholder="start date" id="itineraryStart">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  </div>            
                </div>
                <div class="col-md-4">
                  <label for="itineraryEnd" class="sr-only">End</label>
                  <div class="input-append date" id="datepicker2" data-date-format="dd/mm/yyyy">
                    <input type="text" name="enddate[]" placeholder="start date" id="itineraryEnd">
                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                  </div>            
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="itineraryDate">Shared</label>
          <div class="radio"><label><input type="radio" name="shared" value="true" checked="true"> Public</label></div>
          <div class="radio"><label><input type="radio" name="shared" value="false"> Private</label></div>
        </div>
        <button type="submit" class="btn btn-info btn-sm">Submit</button>
      </form>
      
      </div>
    </div><?php }} ?>
