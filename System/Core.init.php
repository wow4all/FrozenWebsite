<?php
/***************************************************************************
 *   Archivo:                   Core.init.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 28, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 
 	define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
	require 'Class/Class.Log.php';
	if(!DEFINED('ASFO'))
	{
		Log::HackLog("Se intentó acceder directamente al archivo Core.init.php, pero se denegó el acceso", 'Core.init.php');
		exit("<h1>Acceso directo</h1><p>Este archivo no puede ser visualizado directamente. Se ha bloqueado la navegaci&oacute;n</p><small>Su IP fue almacenada por cuestiones de seguridad</small>");
	}
	if(!isset($initalCore))
	{
		/*----------------------------------
		*	Arranque real del sistema
		*----------------------------------*/
		$initialCore = true;
		/*----------------------------------
		*	Carga de definiciones y configuraciones
		*----------------------------------*/
		require 'Configs/Config.php';
		/*----------------------------------
		*	Carga de Smarty e inicialización
		*----------------------------------*/
		DEFINE('SMARTY_DIR', ROOT_PATH.'Smarty/');
		require SMARTY_DIR.'Smarty.class.php';
		$Smarty = new Smarty();
		/*----------------------------------
		*	Carga de las Clases del sistema
		*----------------------------------*/
		require 'Class/Class.Database.php';
		/*----------------------------------
		*	Conexión a la base de datos (única)
		*----------------------------------*/
		DataBase::Connection();
		/*----------------------------------
		*	Segunda Carga de las Clases del Sistema
		*	*Estas requieren de las anteriores y se ordenan
		*----------------------------------*/
		require 'Class/Class.Wall.php';
		require 'Class/Class.Register.php';
		require 'Class/Class.System.php';
		require 'Class/Class.Shoutbox.php';
		/*----------------------------------
		*	Carga de las configuraciones
		*----------------------------------*/
		require 'Class/Class.Profile.php';
		/*----------------------------------
		*	Carga del template fuente
		*----------------------------------*/
		require 'loadTemplate.php';
	}
	
?>