<?php /*%%SmartyHeaderCode:628737367541c431080dd11-41096687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '557e2f82ee0b2bab70dffbbf07f006a7020f9c3d' => 
    array (
      0 => '/Library/WebServer/Documents/trip/interface/templates/layout-auth.tpl',
      1 => 1411134156,
      2 => 'file',
    ),
    'f9b27d26a5ba9b91afbe636d73df8d6aedf46425' => 
    array (
      0 => '/Library/WebServer/Documents/trip/services/feed/templates/home.tpl',
      1 => 1411133655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628737367541c431080dd11-41096687',
  'cache_lifetime' => 300,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54217da2785fd3_99916262',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54217da2785fd3_99916262')) {function content_54217da2785fd3_99916262($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Feed - TrotTrot</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Addons to bootstrap from Jasny -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

    <!-- Font Awesome Icons -->    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

    <!-- Yeti Bootstrap Theme -->
    <link href="/css/bootstrap-yeti.min.css" rel="stylesheet">
    
    <!-- Custom style for autocomplete -->
    <link href="/css/typeahead.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/styles.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="fixedHeader">
  
    <div class="gradient"></div>
  
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/feed">TrotTrot</a>
        </div>

        <div class="collapse navbar-collapse" id=".navbar-inverse-collapse">
        
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/profile"><img src="/photos/avatar/69b3c8bdd4d8acf7e2046de9e21cda31.jpg" width="22" class="img-circle"> Andrew</a></li>
            <li><a href="/account/friends"><span class="fa fa-users fa-lg"></span> <span class="badge">1</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog fa-lg"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/account/profile">Edit Profile</a></li>
                <li><a href="/account/settings">Settings</a></li>
                <li><a href="/help">Help</a></li>
                <li class="divider"></li>
                <li><a href="/account/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          
          <div class="col-sm-4 col-md-4">
            <form class="navbar-form" role="search" method="get" action="/destination/search">
              <div class="input-group-left">
                <span class="fa fa-search"></span>
                <input type="text" class="form-control" name="q" placeholder="where would you like to go?" style="width:400px;">
              </div>
            </form>
          </div>

        </div><!-- /.navbar-collapse -->
        
      </div><!-- /.container-fluid -->
    </nav>

                <div class="gallery_wrapper">
      <div class="container">
        <h5>Trending Destinations</h5>
        <div class="row">
                    <div class="col-md-2">
            <a href="/destination/Paris-France">
                                          <img src="/photos/cities/avatar/Paris-France.jpg" alt="Paris" class="img-responsive">
                            <div class="caption"><h4>Paris</h4></div>
            </a>
          </div>
                    <div class="col-md-2">
            <a href="/destination/Frankfurt-Germany">
                                          <img src="/photos/cities/avatar/Frankfurt-Germany.jpg" alt="Frankfurt" class="img-responsive">
                            <div class="caption"><h4>Frankfurt</h4></div>
            </a>
          </div>
                    <div class="col-md-2">
            <a href="/destination/New_York-New_York-United_States">
                                          <img src="/photos/cities/avatar/New_York-New_York-United_States.jpg" alt="New York" class="img-responsive">
                            <div class="caption"><h4>New York</h4></div>
            </a>
          </div>
                    <div class="col-md-2">
            <a href="/destination/Prague-Czech_Republic">
                                          <img src="/photos/cities/avatar/Prague-Czech_Republic.jpg" alt="Prague" class="img-responsive">
                            <div class="caption"><h4>Prague</h4></div>
            </a>
          </div>
                    <div class="col-md-2">
            <a href="/destination/London-United_Kingdom">
                                          <img src="/photos/cities/avatar/London-United_Kingdom.jpg" alt="London" class="img-responsive">
                            <div class="caption"><h4>London</h4></div>
            </a>
          </div>
                    <div class="col-md-2">
            <a href="/destination/Castries-Saint_Lucia">
                                          <img src="http://placehold.it/400x316&text=Castries" alt="Castries" class="img-responsive">
                            <div class="caption"><h4>Castries</h4></div>
            </a>
          </div>
                  </div>
      </div>	
    </div>
        
    <div class="container">

      <div class="row">
      
        <div class="col-md-8">
        
          <!-- Start New Destination Post -->
          <div class="well">
            <div class="row">
              <div class="col-md-2">
                <a href="/profile"><img src="/photos/avatar/69b3c8bdd4d8acf7e2046de9e21cda31.jpg" width="80"></a>
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
                                                        <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/">Maria Nagy</a></h3>
              <span class="text-muted"><small>2014-08-18</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/59cafddcd9411a6507ba70f7ee5519d9.jpg" height="100" alt="Maria Nagy">
                  </a>
                </div>
                <div class="col-md-10">
                                    <h4>Added a visit to <a href="/destination/">Paris</a></h4>
                                    <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
                        
                                                                  <div class="panel panel-default" style="margin:0;">
            <div class="panel-heading">
              <ul class="nav nav-pills pull-right">
                <li><a href="#"><small><span class="fa fa-star"></span> Like</a></small></li>
                <li><a href="#"><small><span class="fa fa-comment"></span> Comment</a></small></li>
              </ul>
              <h3 class="panel-title pull-left"><a href="/profile/">Maria Nagy</a></h3>
              <span class="text-muted"><small>2014-08-19</small></span>
            </div>
            <div class="panel-body" style="padding:0;">
              <div class="row">
                <div class="col-md-2">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="/photos/avatar/59cafddcd9411a6507ba70f7ee5519d9.jpg" height="100" alt="Maria Nagy">
                  </a>
                </div>
                <div class="col-md-10">
                                    <h4>Added a visit to <a href="/destination/">Prague</a></h4>
                                    <h4>Added a visit to <a href="/destination/">London</a></h4>
                                    <h4>Added a visit to <a href="/destination/">New York</a></h4>
                                    <textarea class="form-control" name="comment[$activity->id]" rows="1" placeholder="comment..."></textarea>
                </div>
              </div>
            </div>
          </div>          
                        
                    
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
                <h4 class="media-heading"><a href="/profile/69b3c8bdd4d8acf7e2046de9e21cda31">Maria Nagy</a> <span class="badge">1st</span></h4>
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
                <h4 class="media-heading"><a href="/profile/69b3c8bdd4d8acf7e2046de9e21cda31">Andrew Nagy</a> <span class="badge">1st</span></h4>
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
                    <h4>Invite Friends to TrotTrot</h4>
          <ul class="media-list">
                        <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://graph.facebook.com/10152606081369210/picture" width="50" alt="Maria Rioux Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Rioux Nagy</h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="fa fa-envelope"></span> Invite</button></p>  
              </div>
            </li>
                        <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="https://graph.facebook.com/10152366936877104/picture" width="50" alt="Chris Barr">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Chris Barr</h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="fa fa-envelope"></span> Invite</button></p>  
              </div>
            </li>
                      </ul>
                              <h4>Travelers You May Know</h4>
          <ul class="media-list">
                        <li class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="/photos/avatar/59cafddcd9411a6507ba70f7ee5519d9.jpg" width="50" alt="Maria Nagy">
              </a>              
              <div class="media-body">
                <h4 class="media-heading">Maria Nagy <span class="badge">2nd</span></h4>
                <p class="feed-post-meta"><button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-plus"></span> Follow Maria</button></p>  
              </div>
            </li>
                      </ul>
                  </div>
        
      </div>
    </div>

        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <!-- Addons to bootstrap from Jasny -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    
    <script src="//cdn.jsdelivr.net/typeahead.js/0.9.3/typeahead.min.js"></script>
    <script src="/js/handlebars-v1.3.0.js"></script> 
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/waypoints-infinite.min.js"></script>
    <script src="/js/local.js"></script>     
    
<script>
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53229572-2', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  
</script>    

  </body>
</html>
<?php }} ?>
