$(document).ready(function(){

	$("#alert").hide();// esconde el alert

	$('.btn-delete').click(function(e){   // el ajax empieza despues de dar click
		e.preventDefault();

		if(! confirm("esta seguro que desea eliminar?")){
			return false;
		}
		//esto no se ejecuta

		var row = $(this).parents('tr');
		var form = $(this).parents('form');
		var url = form.attr('action');

		$('#alert').show();

		$.post(url, form.serialize(), function(result){
			row.fadeOut();
			$('#products-total').html(result.total);
			$('#alert').html(result.message);
		}).fail(function(){
			$('#alert').html('algo salio mal');
		});
	});

});