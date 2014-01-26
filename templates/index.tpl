{extends file="structure.tpl"}


{block name="jumbotron"} 
	{include file="_jumbotron.tpl"}
{/block}

{block name="container"}
<!-- Example row of columns -->
<div class="row">
	
	
	<div class="col-lg-4">
		{**}	
		<div class="row">
			<div class="col-md-10">
				<h2>Sociétés <span class="badge">{$societeCount}</span></h2>	
			</div>
			<div class="col-md-2 pull-right">
				<h2><a href="societe/post" class="btn btn-primary btn-xs " role="button">+</a></h2>
			</div>		
		</div>

		
	<div class="panel-group" id="accordion">	
	{foreach from=$societesListe key=myId item=i}
		<div class="panel panel-default">
			<div class="panel-heading">
				
				<h4 class="panel-title pull-left">
			    	<a data-toggle="collapse" data-parent="#accordion" href="#collapse{$myId}">
			        	{$i->nom}
			        </a>
			    </h4>
			    <div class="pull-right">
				    <a href="//{$smarty.const.BASE_URL}/societe/get/{$i->id}" class="btn btn-info btn-xs" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
				    <a href="//{$smarty.const.BASE_URL}/societe/put/{$i->id}" class="btn btn-warning btn-xs" role="button"><span class="glyphicon glyphicon-pencil"></span></a>			    	
			    </div>
			</div>		
			<div id="collapse{$myId}" class="panel-collapse collapse">
				<div class="panel-body">
		        	<p>{$i->adresse}<br>
		        		{$i->cp} - {$i->ville}<br>
		        		<a href="{$i->url}" taget="_blank">{$i->url}</a>
		        	</p>
		        	<p>
		        		{$i->note|nl2br|truncate:100}
		        	</p>
		        	<p class="text-right">
		        		<em>{$i->date}</em>
		        	</p>
			    </div>
			</div>
		</div>
	{/foreach}
	</div>
	<p class="pull-right"><a class="btn btn-xs" href="//{$smarty.const.BASE_URL}/societes/1">Voir toutes les sociétés &raquo;</a></p>

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
{/block}