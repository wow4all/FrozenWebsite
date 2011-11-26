$(document).ready(function(){
	
	$("#enviar-chat").click(function(){
		var message = $("input#mensaje").val();
		if(message == "Mensaje" || message == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir un mensaje.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#mensaje").focus();
			return false;

		}
		if(message <= 2)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu mensaje no puede ser menor a 2 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#mensaje").focus();
			return false;

		}
		dataString = 'mensaje='+message;
		$.ajax({
			type: "POST",
			url: "http://wow-frozen.servegame.com/System/Ajax/Shoutbox.php",
			data: dataString,
			error: function(){
				jQuery('body').showMessage({
				'thisMessage':['Hubo un error al mandar tu mensaje.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
				$("input#mensaje").focus();
				return false;
			},
			succes: function(){
				//document.getElementById('#mensaje').value = '';			
				return false;
			}
			
		});
		return false;
	});
});