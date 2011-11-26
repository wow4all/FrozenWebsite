<?php
/***************************************************************************
 *   Archivo:                  loadTemplate.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 08, 2011
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
	*	Y entra aquí para destruir la sesión
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
	*	Archivo de cabecera que incluye toda la información
	*	desde:
	*		<!DOCTYPE html>
	*	hasta:
	*		</head>
	*-------------------------------------------------------*/
	require 'Global/Templates/FrozenSocial/global/header.php';
	/*------------------------------------------------------
	*	Si la definición FROZEN_ACTIVE es true significa
	*	que la página está activa, de lo contrario, está
	*	en mantenimiento.
	*	Definición en: [ROOT]/index.php
	*------------------------------------------------------*/
	if(FROZEN_ACTIVE == true)
	{
		/*------------------------------------------------------
		*	Archivo que debe ir en toda la sección superior
		*	desde:
		*		<body>
		*	hasta:
		*		</header>
		*------------------------------------------------------*/
		require 'Global/Templates/FrozenSocial/head.php';
		require 'Global/Templates/FrozenSocial/index.php';
	}
	else
	/*------------------------------------------------------
	*	Si FROZEN_ACTIVE es falso, significa que está
	*	en mantenimiento la página
	*	Definición en: [ROOT]/index.php
	*------------------------------------------------------*/
		require 'Global/Templates/FrozenSocial/global/mantenimiento.php';
	/*------------------------------------------------------
	*	Archivo de pie de página
	*	Desde:
	*		Véase el archivo para conocer inicio.
	*	Hasta:
	*		</html>
	*------------------------------------------------------*/
	require 'Global/Templates/FrozenSocial/global/footer.php';
?>