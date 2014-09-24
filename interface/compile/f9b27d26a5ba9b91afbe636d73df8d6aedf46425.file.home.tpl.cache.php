<?php /* Smarty version Smarty-3.1.19, created on 2014-09-19 14:52:00
         compiled from "/Library/WebServer/Documents/trip/services/feed/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1876719672541c4310983fc0-58636436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b27d26a5ba9b91afbe636d73df8d6aedf46425' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/feed/templates/home.tpl',
      1 => 1411133655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1876719672541c4310983fc0-58636436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trending' => 0,
    'trendingCity' => 0,
    'siteConfig' => 0,
    'image' => 0,
    'user' => 0,
    'activityList' => 0,
    'activityDateCluster' => 0,
    'activityUserCluster' => 0,
    'activityDate' => 0,
    'activity' => 0,
    'itinerary' => 0,
    'visit' => 0,
    'facebookList' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541c4310a3cfa5_86089878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c4310a3cfa5_86089878')) {function content_541c4310a3cfa5_86089878($_smarty_tpl) {?>    <?php if ($_smarty_tpl->tpl_vars['trending']->value) {?>
    <div class="gallery_wrapper">
      <div class="container">
        <h5>Trending Destinations</h5>
        <div class="row">
          <?php  $_smarty_tpl->tpl_vars["trendingCity"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["trendingCity"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trending']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["trendingCity"]->key => $_smarty_tpl->tpl_vars["trendingCity"]->value) {
$_smarty_tpl->tpl_vars["trendingCity"]->_loop = true;
?>
          <div class="col-md-2">
            <a href="/destination/<?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city_id;?>
">
              <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable(((($_smarty_tpl->tpl_vars['siteConfig']->value['photos']).("/cities/avatar/")).($_smarty_tpl->tpl_vars['trendingCity']->value->city_id)).(".jpg"), null, 0);?>
              <?php if (is_file($_smarty_tpl->tpl_vars['image']->value)) {?>
              <img src="/photos/cities/avatar/<?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city_id;?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city;?>
" class="img-responsive">
              <?php } else { ?>
              <img src="http://placehold.it/400x316&text=<?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city;?>
" class="img-responsive">
              <?php }?>
              <div class="caption"><h4><?php echo $_smarty_tpl->tpl_vars['trendingCity']->value->city;?>
</h4></div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>	
    </div>
    <?php }?>
    
    <div class="container">

      <div class="row">
      
        <div class="col-md-8">
        
          <!-- Start New Destination Post -->
          <div class="well">
            <div class="row">
              <div class="col-md-2">
                <a href="/profile"><img src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
.jpg" width="80"></a>
              </div>
              <div class="col-md-10">
                <h4>Recommend a destination</h4>
                <form class="form" role="form" method="post" action="/destination/review">
                  <input type="hidden" name="id" id="hiddenid" value="">
                  <div class="form-group">
                    <div class="input-group">
                      <label class="sr-only" for="newDestination">New Destination</label>
                      <input type="text" id="newDestination" name="destination" class="form-control autocomplete" placeholder="where have you been?" data-provide="typeahead" autocomplete="off">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="nav nav-pills">
                  <li><a href="/itinerary/new">Create Itinerary</a></li>
                  <!--<li><a href="/destination/plan">Plan A Destination</a></li>-->
                </ul>
              </div>
            </div>
          </div>
                  
          <!-- Feed -->
          <?php  $_smarty_tpl->tpl_vars["activityDateCluster"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activityDateCluster"]->_loop = false;
 $_smarty_tpl->tpl_vars["activityDate"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['activityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activityDateCluster"]->key => $_smarty_tpl->tpl_vars["activityDateCluster"]->value) {
$_smarty_tpl->tpl_vars["activityDateCluster"]->_loop = true;
 $_smarty_tpl->tpl_vars["activityDate"]->value = $_smarty_tpl->tpl_vars["activityDateCluster"]->key;
?>
            <?php  $_smarty_tpl->tpl_vars["activityUserCluster"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["activityUserCluster"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityDateCluster']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["activityUserCluster"]->key => $_smarty_tpl->tpl_vars["activityUserCluster"]->value) {
$_smarty_tpl->tpl_vars["activityUserCluster"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['activityUserCluster']->value['itinerary']) {?>
          <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->id;?>
"><?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->lname;?>
</a></h3>
              <span class="text-muted"><small><?php echo $_smarty_tpl->tpl_vars['activityDate']->value;?>
</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->id;?>
.jpg" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->lname;?>
">
                  </a>
                </div>
                <div class="col-md-10">
                  <?php  $_smarty_tpl->tpl_vars['itinerary'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itinerary']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityUserCluster']->value['itinerary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itinerary']->key => $_smarty_tpl->tpl_vars['itinerary']->value) {
$_smarty_tpl->tpl_vars['itinerary']->_loop = true;
?>
                  <h4>Added an itinerary <a href="/destination/<?php echo $_smarty_tpl->tpl_vars['activity']->value->city_id;?>
"><?php echo $_smarty_tpl->tpl_vars['itinerary']->value->title;?>
</a></h4>
                  <?php } ?>
                  <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['activityUserCluster']->value['visit']) {?>
          <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->user_id;?>
"><?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->lname;?>
</a></h3>
              <span class="text-muted"><small><?php echo $_smarty_tpl->tpl_vars['activityDate']->value;?>
</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->id;?>
.jpg" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['activityUserCluster']->value['user']->lname;?>
">
                  </a>
                </div>
                <div class="col-md-10">
                  <?php  $_smarty_tpl->tpl_vars['visit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['visit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityUserCluster']->value['visit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['visit']->key => $_smarty_tpl->tpl_vars['visit']->value) {
$_smarty_tpl->tpl_vars['visit']->_loop = true;
?>
                  <h4>Added a visit to <a href="/destination/<?php echo $_smarty_tpl->tpl_vars['activity']->value->city_id;?>
"><?php echo $_smarty_tpl->tpl_vars['visit']->value->city;?>
</a></h4>
                  <?php } ?>
                  <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
            <?php }?>
            
          <?php } ?>
          <?php } ?>

          <ul class="media-list feed-main">
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://brandsarchive.com/public/files/bahamas/BahamasLogo.jpg" width="50" alt="The Bahamas Tourism">
              </a>
              <div class="media-body">
                <h4 class="media-heading">The Bahamas Tourism</h4>
                <p class="feed-post-meta">Sponsored Post</p>
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://www.doctorshosp.com/new-site/userfiles/57576906%20High%20Res.jpg" height="100">
                  </a>
                  <div class="media-body">
                    Come to the Bahamas!  50% Off Package Deals!
                  </div>
                </div>                
              </div>
            </li>      
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/1100053980/EvieMommy_200x200.jpg" width="50" alt="Maria Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Maria Nagy</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>3 hours ago</small></p>  
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/50x50&text=Paris" width="50" alt="Paris">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="/destination/Paris-France">Paris, France</a></h4>
                    <p>OMG! The city of lights was amazing.  We ate dinner at this fabulous place...<p>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://pbs.twimg.com/profile_images/2987868825/62023fb387cc83c3e30d67cd325cb2ea_200x200.jpeg" width="50" alt="Andrew Nagy">
              </a>
              <div class="media-body">
                <h4 class="media-heading"><a href="/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Andrew Nagy</a> <span class="badge">1st</span></h4>
                <p class="feed-post-meta text-muted"><small>2 days ago</small></p>
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/50x50&text=Duck, NC" width="50" alt="Duck, NC">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="/destination/Duck-North_Carolina-United_States">Duck, North Carolina, United States</a></h4>
                    <p>The outer banks really took me by surprise, its much more affordable than the Jersey Shore...<p>
                  </div>
                </div>                
              </div>
            </li>      
          </ul>
        
        </div>
        
        <div class="col-md-4 feed-main">
          <?php if ($_smarty_tpl->tpl_vars['facebookList']->value['invites']) {?>
          <h4>Invite Friends to TrotTrot</h4>
          <ul class="media-list">
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebookList']->value['invites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://graph.facebook.com/<?php echo $_smarty_tpl->tpl_vars['friend']->value['id'];?>
/picture" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
">
              </a>              
              <div class="media-body">
                <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
</h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="fa fa-envelope"></span> Invite</button></p>  
              </div>
            </li>
            <?php } ?>
          </ul>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['facebookList']->value['friends']) {?>
          <h4>Travelers You May Know</h4>
          <ul class="media-list">
            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facebookList']->value['friends']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
            <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="/photos/avatar/<?php echo $_smarty_tpl->tpl_vars['friend']->value->id;?>
.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
            <?php } ?>
          </ul>
          <?php }?>
        </div>
        
      </div>
    </div>
<?php }} ?>
