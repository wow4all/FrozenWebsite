<?php
/***************************************************************************
 *   Archivo:                     doLogin.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 /***************************************************************************
 *
 *	Recepción del valor: @email-login y @password-login para el inicio de 
 *	sesión y creación de la cookie. 
 *
 ***************************************************************************/
	require "../Class/Class.Login.php";
	
	if(isset($_POST['login_username']) && isset($_POST['login_password']))
	{
		if(Login::checkUsername($_POST['login_username']) == false)
			echo "errorLogin";
		else
		{
			if(!Login::doLogin($_POST['email-login'], $_POST['password-login']))
				echo "errorLogin"; 
			else
				echo "loginComplete";
		}
	}
	else
	{
		Log::ErrorLog("No se enviaron los datos requeridos en el archivo 'doLogin.php' ");
		Log::HackLog("Acceso directo al archivo 'doLogin.php', esto puede ser un error, pero se almacena por seguridad", 'doLogin.php');
		echo "errorLogin";
		return false;
	}
	
?>
