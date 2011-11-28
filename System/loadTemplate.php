<?php
/***************************************************************************
 *   Archivo:                  loadTemplate.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 /***************************************************************************
 *
 *		Carga del template
 *
 ***************************************************************************/
	/*------------------------------------------------------
	*	Si la URL es: http://[URL]/salir/ se convierte a:
	*				  http://[URL]/?page=salir
	*	Y entra aqu� para destruir la sesi�n
	*------------------------------------------------------*/
	if(isset($_GET['page']) && $_GET['page'] == 'salir')
	{
		if( isset($_COOKIE['u_login:s:a:true']) )
		{
			session_start();  
			$_SESSION = array();   
			session_destroy();  
			setcookie('u_login:s:a:true', 'null', time() - (60*60*24*365), "/");
			header('Location:/index.php');
		}
		else
			header('Location:/index.php');
	}
	if(isset($_GET['page']) && $_GET['page'] == 'registro-completo' && !isset($_COOKIE['u_register:temp:false']))
	{
		setcookie('u_register:temp:false', sha1(rand(1000, 2000)), 0, '/');
		header('Location: /registro/2/');
	}
	/*------------------------------------------------------
	*	Archivo de carga inicial de archivos del sistema
	*	de templates 
	*-------------------------------------------------------*/
	require 'Global/Main.php';

?>