{extends file="structure.tpl"}

{block name="container"}
<!-- Example row of columns -->
<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-xs-12 col-sm-9">
	{**}	
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
		    {foreach from=$societesListe key=myId item=i}
		    <tr>
			    <td>{$i->nom}</td>
			    
			    <td>{$i->adresse}</td>
			    <td>{$i->ville}</td>
			    <td>{$i->cp}</td>
			    <td>{$i->type}</td>
			    <td><a href="">voir</a></td>
			    <td><a href="//{$smarty.const.BASE_URL}/societe/put/{$i->id}">Editer</a></td>
		    </tr>
		    {/foreach}
		    
		  </table>
		</div>
		
		
		<ul class="pagination">
		
			{if $current == 1}	<li class="disabled"><a href="#">&laquo;</a></li>{/if}
			{foreach from=$arrayPagination key=myId item=i name=pagination}	
				<li class="{$i.class}"><a href="//{$smarty.const.BASE_URL}/societes/{$i.id}">{$i.label}</a></li>
			{/foreach}		
			{if $last == $current}	<li class="disabled"><a href="#">&raquo;</a></li>{/if}

<!-- 			<li><a href="#">&raquo;</a></li> -->
			<!--
			  <li class="disabled"><a href="//{$smarty.const.BASE_URL}">&laquo;</a></li>
			  <li class="active"><a href="//{$smarty.const.BASE_URL}/societes/1">1</a></li>
			  
			-->
		</ul>
		
	</div>
	
	{include file="_modal_delete_societe.tpl" societe=""}

{/block}




