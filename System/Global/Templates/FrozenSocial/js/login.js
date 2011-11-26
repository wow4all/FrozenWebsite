$(document).ready(function(){

	$("input#login-index").click(function(){
		var Usuario = $("input#login_username");
		var Contrasena = $("input#login_password");
		alert("Hola!");
		if(Usuario == "" || Usuario  == "Usuario")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir tu nombre de usuario.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#login_username").focus();
			return false;
		}
		if(Contrasena == "" || Contrasena == "Contrasena")
		{
			jQuery('body').showMessage({
				'thisMessage':['Debes introducir tu contrase&ntilde;a.'],
				'className':		'fail',
				'opacity':		95,
				'displayNavigation':	false,
				'autoClose':		true,
				'delayTime':		4000
			});
			$("input#login_password").focus();
			return false;
		}
		dataString = 'login_username='+Usuario+'&login_password='+Contrasena;
		$.ajax({
			type: "POST",
			url: "http://wow-frozen.servegame.com/System/Ajax/doLogin.php",
			data: dataString,
		});
	return false
	});	
});