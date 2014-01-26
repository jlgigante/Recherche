<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Supprimer {$societe->nom}</h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" role="form" action="societe/delete/{$societe->id}" method="post" name="societeFormDelete" id="societeFormDelete">
	    	<input id="id" type="hidden" name="id" value="{$societe->id}">
	    	<input type="hidden" name="action" value="delete" id="action">
	    	<button class="btn btn-danger" type="submit" id="modal_delete_submit">Supprimer le fiche de la société <b>{$societe->nom}</b></button>   	
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
var baseUrl = 'http://{$smarty.const.BASE_URL}';
{literal}

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
{/literal}
</script>