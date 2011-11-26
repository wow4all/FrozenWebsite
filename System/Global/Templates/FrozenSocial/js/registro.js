$(document).ready(function(){
	//$("#newbar").slideUp("slow");
	
	$("#crear-cuenta").click(function(){
		var name = $("input#nombres").val();
		var apellidos = $("input#apellidos").val();
		var usuario = $("input#usuario").val();
		var contrasena = $("input#contrasena").val();
		var sex = $("select#sex").val();
		var day = $("select#day").val();
		var month = $("select#month").val();
		var year = $("select#year").val();
		var email = $("input#email").val();
		var email2 = $("input#email2").val();
		var descripcion = $("textarea#descripcion").val();

		if(name == "Nombre" || name == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir tu(s) nombre(s).'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#nombres").focus();
			return false;
		}
		
		if(name.length <= 2)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu(s) nombre(s) no puede(n) tener menos de 2 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#nombres").focus();
			return false;
		}
		
		if(name.length >= 64)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu(s) nombre(s) no puede(n) tener m&aacute;s de 64 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#nombres").focus();
			return false;
		}
		
		if(apellidos == "Apellidos" || apellidos == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir tu(s) apellido(s).'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#apellidos").focus();
			return false;
		}
		
		if(apellidos.length <= 2)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu(s) apellido(s) no puede(n) tener  menos de 2 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#apellidos").focus();
			return false;
		}
		
		if(apellidos.length >= 64)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu(s) apellido(s) no puede(n) tener m&aacute;s de 64 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#apellidos").focus();
			return false;
		}
		
		if(usuario == "Usuario" || usuario == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir un nombre de usuario.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#usuario").focus();
			return false;
		}
		
		if(usuario.length <= 3)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu nombre de usuario no puede tener menos de 3 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#usuario").focus();
			return false;
		}
		
		if(usuario.length > 12)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu nombre de usuario no puede tener m&aacute;s de 12 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#usuario").focus();
			return false;
		}
		
		if(contrasena == "Contraseña" || contrasena == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir una contrase&ntilde;a.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#contrasena").focus();
			return false;
		}
		
		if(contrasena.length < 6)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu contrase&ntilde;a no puede ser menor a 6 caracteres'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#contrasena").focus();
			return false;
		}
		
		if(contrasena.length > 12)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu contrase&ntilde;a no puede ser mayor a 12 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#contrasena").focus();
			return false;
		}
		
		if(sex == "null" || sex == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes seleccionar tu sexo.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("select#sex").focus();
			return false;
		}
		
		if(email == "Email" || email == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir tu correo electr&oacute;nico.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("select#email").focus();
			return false;
		}
		var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;
		if(!filter.test(email))
		{
			jQuery('body').showMessage({
				'thisMessage':['El correo electr&oacute;nico tiene un formato incorrecto.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("select#email").focus();
			return false;
		}
		
		if(email2 == "Repite tu Email" || email2 == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes repetir tu correo electr&oacute;nico'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#email2").focus();
			return false;
		}
		
				
		if(email != email2)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu correo electr&oacute;nico no coincide con la repetici&oacute;n del mismo'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#email2").focus();
			return false;
		}
		
		if(descripcion == "Descripcion" || descripcion == "")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir una descripci&oacute;n de ti mism@.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("textarea#descripcion").focus();
			return false;
		}
		
		if(descripcion.length > 250)
		{
			jQuery('body').showMessage({
				'thisMessage':['Tu descripci&oacute;n supera los 250 caracteres.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("textarea#descripcion").focus();
			return false;
		}
		dataString = 'username='+usuario+'&email='+email+'&password='+contrasena+'&name='+name+'&secondname='+apellidos+'&sex='+sex+'&day='+day+'&month='+month+'&year='+year+'&description='+descripcion;
		$.ajax({
			type: "POST", 
			url: "http://wow-frozen.servegame.com/System/Ajax/doRegister.php",
			data: dataString,
			beforeSend: function(){
				jQuery('body').showMessage({
					'thisMessage':['Cargando...'],
					'className':		'notification',
					'opacity':		95,
					'displayNavigation':	false,
					'autoClose':		true,
					'delayTime':		4000
				});
			},
			success: function(response){
				if(response == 'inUseUsername')
				{
					jQuery('body').showMessage({
						'thisMessage':['El nombre de usuario est&aacute; en uso'],
						'className':		'faiil',
						'opacity':		95,
						'displayNavigation':	false,
						'autoClose':		true,
						'delayTime':		4000
					});
				}
				else if(response == 'inUseEmail')
				{
					jQuery('body').showMessage({
						'thisMessage':['El correo electr&oacute;nico est&aacute; en uso'],
						'className':		'fail',
						'opacity':		95,
						'displayNavigation':	false,
						'autoClose':		true,
						'delayTime':		4000
					});
				}
				else if(response == "Error")
				{
					jQuery('body').showMessage({
						'thisMessage':['Hubo un error interno en el servidor o algo paso por aqu&iacute; prueba registrarte m&aacute;s tarde o contacta con el administrador y av&iacute;sale del error'],
						'className':		'fail',
						'opacity':		95,
						'displayNavigation':	false,
						'autoClose':		true,
						'delayTime':		6000
					});
				}
				else
				{
					jQuery('body').showMessage({
						'thisMessage':['Creaci&oacute;n de cuenta completa, en un momento ser&aacute;s redirigido al siguiente paso'],
						'className':		'success',
						'opacity':		95,
						'displayNavigation':	false,
						'autoClose':		true,
						'delayTime':		6000
					});
					setTimeout(function(){
							window.location.href="/registro-completo/";
						},4000);
				}
			},
			error: function(){
				jQuery('body').showMessage({
					'thisMessage':['Al parecer hubo un error con el sistema y el registro no pudo ser completado, comprueba m&aacute;s tarde o contacta con el administrador'],
					'className':		'fail',
					'opacity':		95,
					'displayNavigation':	false,
					'autoClose':		true,
					'delayTime':		6000
				});
			},
			
			
		});
		return false;
	});
});