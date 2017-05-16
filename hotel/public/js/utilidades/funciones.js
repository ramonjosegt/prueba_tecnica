$(document).ready( function() {
	
	desabilitarCampos();
	
	/*
	 * 
	 */
	$("#type_document_id").change(function(event){
		var tipo_documento = $("#type_document_id").val();
		
		if (tipo_documento == 0){
			//$("#huesped").attr("class", 'tab-content');
			//$("#compania").attr("class", 'tab-content');
		}
		
	});
	
	
	/*
	 * Programar evento blur, al instante en que el usuario
	 * hace clic en cualquier lugar de la pantalla al 
	 * escribir el dni del huesped.
	 */
	$("#dni").blur(function(event){
		var tipo_documento = $("#type_document_id").val();
		
		if (tipo_documento == 1){
			$("#huesped").attr("class", 'active');
		}
		
		if (tipo_documento == 2){
			//$("#compania").attr("class", 'active');
		}
		
		$.get("huesped/"+event.target.value, function(response) {
			
			if (response.length > 0){
				
				desabilitarCampos();
				
				$("#type").val(response[0].type);
				$("#name").val(response[0].name);
				$("#last_name").val(response[0].last_name);
				
				if(response[0].gender == 'female'){
					$("#gender1").prop('checked', 'checked');
					$("#gender2").removeAttr('checked');
				}
				
				if(response[0].gender == 'male'){
					$("#gender2").prop('checked', 'checked');
					$("#gender1").removeAttr('checked');
				}
				
				$("#date_of_birth").val(response[0].date_of_birth);
				$("#occupation").val(response[0].occupation);
				$("#email").val(response[0].email);
				
				// Ocultar boton procesar
				$("#procesar").hide();
				
				// Mostrar boton para registrar reservas
				$("#registrar-reservas").show();
			}
			
			if (response.length == 0){
				
				habilitarCampos();
				
				$("#type").val("");
				$("#name").val("");
				$("#last_name").val("");
				$("#gender1").removeAttr('checked');
				$("#gender2").removeAttr('checked');
				$("#date_of_birth").val("");
				$("#occupation").val("");
				$("#email").val("");
				
				// Ocultar boton preocesar
				$("#procesar").show();
				
				// Ocultar boton para registrar reservas
				$("#registrar-reservas").hide();
			}
			
			
		});
	});
	
	function desabilitarCampos(){
		
		$("#type").attr("disabled", "disabled");
		$("#name").attr("disabled", "disabled");
		$("#last_name").attr("disabled", "disabled");
		$("#gender1").attr("disabled", "disabled");
		$("#gender2").attr("disabled", "disabled");
		$("#date_of_birth").attr("disabled", "disabled");
		$("#occupation").attr("disabled", "disabled");
		$("#email").attr("disabled", "disabled");
		$("#type_telephone").attr("disabled", "disabled");
		$("#number_telephone").attr("disabled", "disabled");
		$("#address").attr("disabled", "disabled");
		$("#countries_id").attr("disabled", "disabled");
		$("#states_id").attr("disabled", "disabled");
		$("#city_id").attr("disabled", "disabled");
		
		// Ocultar boton preocesar
		$("#procesar").hide();
		
		// Ocultar boton para registrar reservas
		$("#registrar-reservas").hide();
	}
	
	function habilitarCampos(){
		
		$("#type").removeAttr('disabled');
		$("#name").removeAttr('disabled');
		$("#last_name").removeAttr('disabled');
		$("#gender1").removeAttr('disabled');
		$("#gender2").removeAttr('disabled');
		$("#date_of_birth").removeAttr('disabled');
		$("#occupation").removeAttr('disabled');
		$("#email").removeAttr('disabled');
		$("#type_telephone").removeAttr('disabled');
		$("#number_telephone").removeAttr('disabled');
		$("#address").removeAttr('disabled');
		$("#countries_id").removeAttr('disabled');
		$("#states_id").removeAttr('disabled');
		$("#city_id").removeAttr('disabled');
	}
	
	/*
	 * Cargar ventana modal de la vista reservas.blade.php
	 * para registrar reservas.
	 */
	$("#registrar-reservas").click(function(event){
		
		event.preventDefault();
		
		$("#rooms-reservas").attr("class", 'active');
		
		//var fecha_in = $("#checkin_date").val();
		//var fecha_out = $("#checkout_date").val();
		
		var form = $("#form-reservas");
		var form_action = $("#form-reservas").attr('action');
		var url = form_action;
		var parametros = form.serialize();
		
		$.get("reservas/register", parametros, function(response){
			console.log(response.rooms);
			//$("#ModalReservas").modal('show');
		});
		
	});
	
});