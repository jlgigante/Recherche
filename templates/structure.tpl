<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="//{$smarty.const.BASE_URL}/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="//{$smarty.const.BASE_URL}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//{$smarty.const.BASE_URL}/css/main.css">

        <script src="//{$smarty.const.BASE_URL}/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Annonces</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li {if $smarty.server.SCRIPT_NAME == '/index.php'}class="active"{/if}><a href="/">Home</a></li>
            <li><a href="//{$smarty.const.BASE_URL}/societes/1">Liste des sociétés</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown" class="active">
            {if isset($societe)}
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active">{$societe->nom} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Editer</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Supprimer</a></li>
                {*
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                *}
              </ul>
            </li>
          </ul>
          {/if}
          {*
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          *}
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    {block name="jumbotron"} 
    	
    {/block}    

    <div class="container">
    	{block name="container"} 
    	{/block}
    </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="//{$smarty.const.BASE_URL}/js/vendor/bootstrap.min.js"></script>

        <script src="//{$smarty.const.BASE_URL}/js/plugins.js"></script>
        <script src="//{$smarty.const.BASE_URL}/js/main.js"></script>

        <script>
	        {literal}
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
            {/literal}
        </script>
    </body>
</html>
