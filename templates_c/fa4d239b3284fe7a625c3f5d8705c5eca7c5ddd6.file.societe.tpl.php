<?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:01:55
         compiled from "templates/societe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33227777052e2321f2da0c6-04515146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4d239b3284fe7a625c3f5d8705c5eca7c5ddd6' => 
    array (
      0 => 'templates/societe.tpl',
      1 => 1390574766,
      2 => 'file',
    ),
    '29dc823677545fc68809f6fbc92094210f947e5a' => 
    array (
      0 => 'templates/structure.tpl',
      1 => 1390748512,
      2 => 'file',
    ),
    '65a72f9cad88a5818b25bae13ebe9cc14281296b' => 
    array (
      0 => 'templates/_aside_contacts.tpl',
      1 => 1390315472,
      2 => 'file',
    ),
    'a7a121ffbf105491026457efc8fff4a93fb375ec' => 
    array (
      0 => 'templates/_modal_delete_societe.tpl',
      1 => 1390475180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33227777052e2321f2da0c6-04515146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e2321f7163d8_58540012',
  'variables' => 
  array (
    'societe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e2321f7163d8_58540012')) {function content_52e2321f7163d8_58540012($_smarty_tpl) {?><!DOCTYPE html>
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
			<h2><?php if (isset($_smarty_tpl->tpl_vars['societe']->value->nom)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
<?php }else{ ?>Ajouter société<?php }?></h2>					
		</div>
				
		<form class="form-horizontal" role="form" action="http://<?php echo @constant('BASE_URL');?>
/societe/<?php echo $_GET['action'];?>
<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->id)){?>/<?php echo $_smarty_tpl->tpl_vars['societe']->value->id;?>
<?php }?>" method="post" name="societeForm" id="societeForm">
			<input type="hidden" name="action" value="<?php echo $_GET['action'];?>
" id="action">
			
			<input type="hidden" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->id)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->id;?>
<?php }?>">
			
			
			<div class="form-group  has-warning">
			    <label for="nom" class="col-sm-2 control-label">Nom*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nom" placeholder="Nom" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->nom)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
<?php }?>" name="nom">
			    </div>
		    </div>
		    
		    
		    <div class="form-group">
			    <label for="adresse" class="col-sm-2 control-label">Adresse*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="adresse" placeholder="Adresse" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->adresse)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->adresse;?>
<?php }?>" name="adresse">
			    </div>
		    </div>
		    
		    
		    <div class="form-group">
			    <label for="ville" class="col-sm-2 control-label">Ville*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="ville" placeholder="Ville" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->ville)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->ville;?>
<?php }?>" name="ville">
			    </div>
		    </div>
		    
		    
		    <div class="form-group">
			    <label for="cp" class="col-sm-2 control-label">CP</label>
			    <div class="col-xs-4">
			      <input type="text" class="form-control" id="cp" placeholder="Code Postal" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->cp)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->cp;?>
<?php }?>" name="cp">
			    </div>
		    </div>

		    
		    <div class="form-group">
			    <label for="url" class="col-sm-2 control-label">url</label>
			    <div class="col-xs-4">
			      <input type="text" class="form-control" id="url" placeholder="URL" value="<?php if (isset($_smarty_tpl->tpl_vars['societe']->value->url)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->url;?>
<?php }?>" name="url">
			    </div>
		    </div>
		    
		    
		    <div class="form-group">
			    <label for="id_type" class="col-sm-2 control-label">Type</label>
			    <div class="col-xs-4">
			    	<select class="form-control input-sm" id="id_type" name="id_type">
			    				<option></option>
			    		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			    			<option value="<?php echo $_smarty_tpl->tpl_vars['myId']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['societe']->value->id_type)&&$_smarty_tpl->tpl_vars['myId']->value==$_smarty_tpl->tpl_vars['societe']->value->id_type){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
</option>
			    		<?php } ?>
			    	</select>
			      
			    </div>
		    </div>
		    
		     
		    <div class="form-group">
			    <label for="note" class="col-sm-2 control-label">Note</label>
			    <div class="col-xs-10">			      
			      <textarea class="form-control" rows="3" id="note" placeholder="Note" name="note"><?php if (isset($_smarty_tpl->tpl_vars['societe']->value->note)){?><?php echo $_smarty_tpl->tpl_vars['societe']->value->note;?>
<?php }?></textarea>
			    </div>
		    </div>
		    
		    <div class="col-md-offset-2">
		    	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Sauver</button> <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span>Supprimer</button>
		    </div>
		</form>
		<div id="alert" class="col-md-offset-2 alert hidden"></div>
	</div>
	
	
	<?php if (isset($_smarty_tpl->tpl_vars['societe']->value)){?>
	
		<?php /*  Call merged included template "_aside_contacts.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_aside_contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '33227777052e2321f2da0c6-04515146');
content_52e523644d9ae2_68970534($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "_aside_contacts.tpl" */?>
	
	
	
	<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
		<div class="row">
			<h3>RDV</h3>	
			<?php if (isset($_smarty_tpl->tpl_vars['contacts']->value)&&!empty($_smarty_tpl->tpl_vars['contacts']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<div class="col-xs-12" >
					<p><?php echo $_smarty_tpl->tpl_vars['i']->value->nom;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->prenom;?>
<br><em>(<?php echo $_smarty_tpl->tpl_vars['i']->value->titre;?>
)</em></p>
					<p><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['i']->value->email;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->email;?>
</a></p>
					<p><?php echo $_smarty_tpl->tpl_vars['i']->value->telephone;?>
</p>
				</div>	
				<?php } ?>
			<?php }else{ ?>
				<p>Il n'y a pas de contact pour <?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
</p>
			<?php }?>
		</div>	
	</div>
	<?php }?>
	
</div>



<?php /*  Call merged included template "_modal_delete_societe.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_modal_delete_societe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '33227777052e2321f2da0c6-04515146');
content_52e52364653ef4_94334122($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "_modal_delete_societe.tpl" */?>




<script>


$(document).ready(function() {
 /*FORMULAIRE PRINCIPAL*/
    $('#societeForm').on('submit', function() { 	    
	    var ville = $('#ville');
	    
        var valNom = $('#nom').val();
        var valAdresse = $('#adresse').val();
        var valVille = $('#ville').val();
        var valCp = $('#cp').val();
        var valUrl = $('#url').val();
        var valType = $('#type').val();
        
        if(valNom == '' || valVille == '') {
        	ville.parents('div:eq(1)').addClass('has-warning');
	        $("#alert").removeClass('hidden').addClass("alert-warning show");
           	$("#alert").html('Les champs doivent êtres remplis'); 
            
        } else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.codeRetour == 0) {
                    	$('*').removeClass('has-warning');
                    	$("#alert").html(json.message);
                    	$("#alert").fadeIn().removeClass('hidden alert-warning').addClass("alert-success show");
                    	

                    } else {
                        alert('Erreur : '+ json.codeRetour);
                    }
                }
            });
        }
        return false;
    });
        
});

</script>


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
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:01:56
         compiled from "templates/_aside_contacts.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e523644d9ae2_68970534')) {function content_52e523644d9ae2_68970534($_smarty_tpl) {?>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
	<div class="row">
		<h3>Contacts</h3>	
		<?php if (isset($_smarty_tpl->tpl_vars['contacts']->value)&&!empty($_smarty_tpl->tpl_vars['contacts']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			<div class="col-xs-12" >
				<?php if (!empty($_smarty_tpl->tpl_vars['i']->value->nom)||!empty($_smarty_tpl->tpl_vars['i']->value->prenom)||!empty($_smarty_tpl->tpl_vars['i']->value->titre)){?><p><?php echo $_smarty_tpl->tpl_vars['i']->value->nom;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value->nom;?>
 <em>(<?php echo $_smarty_tpl->tpl_vars['i']->value->titre;?>
)</em></p><?php }?>
				<p><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['i']->value->email;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->email;?>
</a></p>
				<p><?php echo $_smarty_tpl->tpl_vars['i']->value->telephone;?>
</p>
			</div>	
			<?php } ?>
		<?php }else{ ?>			
			<p>Il n'y a pas de contact pour <?php echo $_smarty_tpl->tpl_vars['societe']->value->nom;?>
</p>
		<?php }?>
	</div>	
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-26 16:01:56
         compiled from "templates/_modal_delete_societe.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e52364653ef4_94334122')) {function content_52e52364653ef4_94334122($_smarty_tpl) {?><!-- Modal -->
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