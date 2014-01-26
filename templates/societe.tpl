{extends file="structure.tpl"}

{block name="container"}
<!-- Example row of columns -->
<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-xs-12 col-sm-9">
	{**}	
		<div class="row">
			<h2>{if isset($societe->nom)}{$societe->nom}{else}Ajouter société{/if}</h2>					
		</div>
				
		<form class="form-horizontal" role="form" action="http://{$smarty.const.BASE_URL}/societe/{$smarty.get.action}{if isset($societe->id)}/{$societe->id}{/if}" method="post" name="societeForm" id="societeForm">
			<input type="hidden" name="action" value="{$smarty.get.action}" id="action">
			
			<input type="hidden" name="id" id="id" value="{if isset($societe->id)}{$societe->id}{/if}">
			
			{*nom*}
			<div class="form-group  has-warning">
			    <label for="nom" class="col-sm-2 control-label">Nom*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nom" placeholder="Nom" value="{if isset($societe->nom)}{$societe->nom}{/if}" name="nom">
			    </div>
		    </div>
		    
		    {*adresse*}
		    <div class="form-group">
			    <label for="adresse" class="col-sm-2 control-label">Adresse*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="adresse" placeholder="Adresse" value="{if isset($societe->adresse)}{$societe->adresse}{/if}" name="adresse">
			    </div>
		    </div>
		    
		    {*ville*}
		    <div class="form-group">
			    <label for="ville" class="col-sm-2 control-label">Ville*</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="ville" placeholder="Ville" value="{if isset($societe->ville)}{$societe->ville}{/if}" name="ville">
			    </div>
		    </div>
		    
		    {*cp*}
		    <div class="form-group">
			    <label for="cp" class="col-sm-2 control-label">CP</label>
			    <div class="col-xs-4">
			      <input type="text" class="form-control" id="cp" placeholder="Code Postal" value="{if isset($societe->cp)}{$societe->cp}{/if}" name="cp">
			    </div>
		    </div>

		    {*url*}
		    <div class="form-group">
			    <label for="url" class="col-sm-2 control-label">url</label>
			    <div class="col-xs-4">
			      <input type="text" class="form-control" id="url" placeholder="URL" value="{if isset($societe->url)}{$societe->url}{/if}" name="url">
			    </div>
		    </div>
		    
		    {*type*}
		    <div class="form-group">
			    <label for="id_type" class="col-sm-2 control-label">Type</label>
			    <div class="col-xs-4">
			    	<select class="form-control input-sm" id="id_type" name="id_type">
			    				<option></option>
			    		{foreach from=$type key=myId item=i}
			    			<option value="{$myId}" {if isset($societe->id_type) && $myId == $societe->id_type}selected{/if}>{$i.type}</option>
			    		{/foreach}
			    	</select>
			      
			    </div>
		    </div>
		    
		     {*Note*}
		    <div class="form-group">
			    <label for="note" class="col-sm-2 control-label">Note</label>
			    <div class="col-xs-10">			      
			      <textarea class="form-control" rows="3" id="note" placeholder="Note" name="note">{if isset($societe->note)}{$societe->note}{/if}</textarea>
			    </div>
		    </div>
		    
		    <div class="col-md-offset-2">
		    	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span> Sauver</button> <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove"></span>Supprimer</button>
		    </div>
		</form>
		<div id="alert" class="col-md-offset-2 alert hidden"></div>
	</div>
	
	
	{if isset($societe)}
	
		{include file="_aside_contacts.tpl"}
	
	
	{*RDV*}
	<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
		<div class="row">
			<h3>RDV</h3>	
			{if isset($contacts) && !empty($contacts)}
				{foreach from=$contacts key=myId item=i}
				<div class="col-xs-12" >
					<p>{$i->nom} {$i->prenom}<br><em>({$i->titre})</em></p>
					<p><a href="mailto:{$i->email}">{$i->email}</a></p>
					<p>{$i->telephone}</p>
				</div>	
				{/foreach}
			{else}
				<p>Il n'y a pas de contact pour {$societe->nom}</p>
			{/if}
		</div>	
	</div>
	{/if}
	
</div>



{include file="_modal_delete_societe.tpl"}




<script>
{literal}

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
{/literal}
</script>

{/block}




