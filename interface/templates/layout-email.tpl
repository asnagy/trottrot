<!DOCTYPE html>
<html lang="{$language}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrotTrot</title>
    
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    

    <!-- Yeti Bootstrap Theme -->
    <link href="//trottrot.com/css/bootstrap-yeti.min.css" rel="stylesheet">

    <!-- Custom style for autocomplete -->
    <link href="//trottrot.com/css/typeahead.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="//trottrot.com/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://trottrot.com">TrotTrot</a>
        </div>      
      </div>
    </nav>

    {if $pageTemplate == "error"}
    {include file="../../interface/templates/error.tpl"}
    {else}
    {include file="../../services/$module/templates/$pageTemplate"}
    {/if}    

    <div class="navbar navbar-default footer">
      <div class="container">
        <ul class="nav nav-pills">
          <li><a href="http://trottrot.com/account/settings?unsubscribe={$email}">Unsubscribe</a></li>
          <li><a href="http://trottrot.com/account/settings">My Account</a></li>
        </ul>
        <p class="text-center text-muted">&copy; Copyright TrotTrot 2014.</p>
      </div>
    </div>
    
  </body>
</html>