<?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:21:54
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69418811952e22c311d4617-64166705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1390749711,
      2 => 'file',
    ),
    '29dc823677545fc68809f6fbc92094210f947e5a' => 
    array (
      0 => 'templates/structure.tpl',
      1 => 1390748512,
      2 => 'file',
    ),
    'ef0eec5a40c53eee7d2b36d86c69cfd8b082f47b' => 
    array (
      0 => 'templates/_jumbotron.tpl',
      1 => 1390231428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69418811952e22c311d4617-64166705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e22c314f1cc1_90155605',
  'variables' => 
  array (
    'societe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e22c314f1cc1_90155605')) {function content_52e22c314f1cc1_90155605($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/jlgigante/Sites/Recherche/libs/plugins/modifier.truncate.php';
?><!DOCTYPE html>
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

        <link rel="stylesheet" href="//<?php echo @constant('BASE_URL');?>
/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="//<?php echo @constant('BASE_URL');?>
/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//<?php echo @constant('BASE_URL');?>
/css/main.css">

        <script src="//<?php echo @constant('BASE_URL');?>
/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
            <li <?php if ($_SERVER['SCRIPT_NAME']=='/index.php'){?>class="active"<?php }?>><a href="/">Home</a></li>
            <li><a href="//<?php echo @constant('BASE_URL');?>
/societes/1">Liste des sociétés</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown" class="active">
            <?php if (isset($_smarty_tpl->tpl_vars['societe']->value)){?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="active"><?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Editer</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Supprimer</a></li>
                
              </ul>
            </li>
          </ul>
          <?php }?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
     
	<?php /*  Call merged included template "_jumbotron.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69418811952e22c311d4617-64166705');
content_52e528127d55c3_75980162($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "_jumbotron.tpl" */?>
    

    <div class="container">
    	
<!-- Example row of columns -->
<div class="row">
	
	
	<div class="col-lg-4">
			
		<div class="row">
			<div class="col-md-10">
				<h2>Sociétés <span class="badge"><?php echo $_smarty_tpl->tpl_vars['societeCount']->value;?>
</span></h2>	
			</div>
			<div class="col-md-2 pull-right">
				<h2><a href="societe/post" class="btn btn-primary btn-xs " role="button">+</a></h2>
			</div>		
		</div>

		
	<div class="panel-group" id="accordion">	
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['societesListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				
				<h4 class="panel-title pull-left">
			    	<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['myId']->value;?>
">
			        	<?php echo $_smarty_tpl->tpl_vars['i']->value->nom;?>

			        </a>
			    </h4>
			    <div class="pull-right">
				    <a href="//<?php echo @constant('BASE_URL');?>
/societe/get/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="btn btn-info btn-xs" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
				    <a href="//<?php echo @constant('BASE_URL');?>
/societe/put/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span></a>			    	
			    </div>
			</div>		
			<div id="collapse<?php echo $_smarty_tpl->tpl_vars['myId']->value;?>
" class="panel-collapse collapse">
				<div class="panel-body">
		        	<p><?php echo $_smarty_tpl->tpl_vars['i']->value->adresse;?>
<br>
		        		<?php echo $_smarty_tpl->tpl_vars['i']->value->cp;?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value->ville;?>
<br>
		        		<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value->url;?>
" taget="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value->url;?>
</a>
		        	</p>
		        	<p>
		        		<?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['i']->value->note),100);?>

		        	</p>
		        	<p class="text-right">
		        		<em><?php echo $_smarty_tpl->tpl_vars['i']->value->date;?>
</em>
		        	</p>
			    </div>
			</div>
		</div>
	<?php } ?>
	</div>
	<p class="pull-right"><a class="btn btn-xs" href="//<?php echo @constant('BASE_URL');?>
/societes/1">Voir toutes les sociétés &raquo;</a></p>

	</div>
	
	<div class="col-lg-4">
		<h2>Heading</h2>
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
	</div>
	<div class="col-lg-4">
		<h2>Heading</h2>
		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
	</div>
	<div class="col-lg-4">
		<h2>Heading</h2>
		<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
	</div>
</div>

    </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="//<?php echo @constant('BASE_URL');?>
/js/vendor/bootstrap.min.js"></script>

        <script src="//<?php echo @constant('BASE_URL');?>
/js/plugins.js"></script>
        <script src="//<?php echo @constant('BASE_URL');?>
/js/main.js"></script>

        <script>
	        
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
            
        </script>
    </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:21:54
         compiled from "templates/_jumbotron.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e528127d55c3_75980162')) {function content_52e528127d55c3_75980162($_smarty_tpl) {?> <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div><?php }} ?>