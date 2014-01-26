{*CONTACTS*}
<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
	<div class="row">
		<h3>Contacts</h3>	
		{if isset($contacts) && !empty($contacts)}
			{foreach from=$contacts key=myId item=i}
			<div class="col-xs-12" >
				{if !empty($i->nom) || !empty($i->prenom) || !empty($i->titre) }<p>{$i->nom} {$i->nom} <em>({$i->titre})</em></p>{/if}
				<p><a href="mailto:{$i->email}">{$i->email}</a></p>
				<p>{$i->telephone}</p>
			</div>	
			{/foreach}
		{else}			
			<p>Il n'y a pas de contact pour {$societe->nom}</p>
		{/if}
	</div>	
</div>
