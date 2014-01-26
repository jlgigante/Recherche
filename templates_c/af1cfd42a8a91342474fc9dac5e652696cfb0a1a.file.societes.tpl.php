<?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:19:38
         compiled from "templates/societes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173305579152e2298f7377a2-36453338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af1cfd42a8a91342474fc9dac5e652696cfb0a1a' => 
    array (
      0 => 'templates/societes.tpl',
      1 => 1390602392,
      2 => 'file',
    ),
    '29dc823677545fc68809f6fbc92094210f947e5a' => 
    array (
      0 => 'templates/structure.tpl',
      1 => 1390748512,
      2 => 'file',
    ),
    'a7a121ffbf105491026457efc8fff4a93fb375ec' => 
    array (
      0 => 'templates/_modal_delete_societe.tpl',
      1 => 1390475180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173305579152e2298f7377a2-36453338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e2298faff611_08528242',
  'variables' => 
  array (
    'societe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e2298faff611_08528242')) {function content_52e2298faff611_08528242($_smarty_tpl) {?><!DOCTYPE html>
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
     
    	
        

    <div class="container">
    	
<!-- Example row of columns -->
<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-xs-12 col-sm-9">
		
		<div class="row">
			<h2>Sociétés</h2>					
		</div>
		
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Panel heading</div>
		
		  <!-- Table -->
		  <table class="table">
		    <thead>
		    	 <td>nom</td>
			    <td>adresse</td>
			    <td>ville</td>
			    <td>cp</td>
			    <td>type</td>
			    <td>voir</td>
			    <td>editer</td>			    
		    </thead>
		    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['societesListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		    <tr>
			    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nom;?>
</td>
			    
			    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->adresse;?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->ville;?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->cp;?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['i']->value->type;?>
</td>
			    <td><a href="">voir</a></td>
			    <td><a href="//<?php echo @constant('BASE_URL');?>
/societe/put/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">Editer</a></td>
		    </tr>
		    <?php } ?>
		    
		  </table>
		</div>
		
		
		<ul class="pagination">
		
			<?php if ($_smarty_tpl->tpl_vars['current']->value==1){?>	<li class="disabled"><a href="#">&laquo;</a></li><?php }?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayPagination']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>	
				<li class="<?php echo $_smarty_tpl->tpl_vars['i']->value['class'];?>
"><a href="//<?php echo @constant('BASE_URL');?>
/societes/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['label'];?>
</a></li>
			<?php } ?>		
			<?php if ($_smarty_tpl->tpl_vars['last']->value==$_smarty_tpl->tpl_vars['current']->value){?>	<li class="disabled"><a href="#">&raquo;</a></li><?php }?>

<!-- 			<li><a href="#">&raquo;</a></li> -->
			<!--
			  <li class="disabled"><a href="//<?php echo @constant('BASE_URL');?>
">&laquo;</a></li>
			  <li class="active"><a href="//<?php echo @constant('BASE_URL');?>
/societes/1">1</a></li>
			  
			-->
		</ul>
		
	</div>
	
	<?php /*  Call merged included template "_modal_delete_societe.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_modal_delete_societe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('societe'=>''), 0, '173305579152e2298f7377a2-36453338');
content_52e5278aa293c0_63228074($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "_modal_delete_societe.tpl" */?>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:19:38
         compiled from "templates/_modal_delete_societe.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e5278aa293c0_63228074')) {function content_52e5278aa293c0_63228074($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Supprimer <?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
</h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" role="form" action="societe/delete/<?php echo $_smarty_tpl->tpl_vars['societe']->value->id;?>
" method="post" name="societeFormDelete" id="societeFormDelete">
	    	<input id="id" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['societe']->value->id;?>
">
	    	<input type="hidden" name="action" value="delete" id="action">
	    	<button class="btn btn-danger" type="submit" id="modal_delete_submit">Supprimer le fiche de la société <b><?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
</b></button>   	
	    </form>	    
	    <div id="modal-alert" class="alert hidden"></div>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal_delete_close">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
var baseUrl = 'http://<?php echo @constant('BASE_URL');?>
';


$(document).ready(function() {

	$.fn.modalCloseRedirect = function(redirect){
		var button = $(this).attr('data-dismiss');
		if(button == 'modal') {
			window.location.href = baseUrl;
		}
	};
	
	//alert(555);
                    


     $('#societeFormDelete').on('submit', function() {
	    var id = $('#id').val();
	     $("#modal_delete_submit").attr("disabled", "disabled");
	    //$('#r').html('<img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif">');
	    $.ajax({
                url: $(this).attr('action'),
                timeout: 3000,
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                console.log(json.codeRetour);
                    if(json.codeRetour == 0) {                    	
                    	$("#modal-alert").fadeIn().removeClass('hidden alert-warning').addClass("alert-success show");
                    	$("#modal-alert").html(json.message + ' <a href="/societe/post">Editer une nouvelle fiche "Société"</a> ou <a href="/">retour à l\'accueil</a>');
                    	$("#modal_delete_submit").hide();
                    	
                    	$(':button').click(function(){
                    		$(this).modalCloseRedirect();
                    		
                    	});
                    	
                    	
                    	
                    } else {
                        alert('Erreur : '+ json.codeRetour);
                    }
                }
            });	    
	    return false;
    });
});

</script><?php }} ?>