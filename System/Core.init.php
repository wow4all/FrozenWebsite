<?php
/***************************************************************************
 *   Archivo:                   Core.init.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 07, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 
 	define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
	
	if(!isset($initalCore))
	{
		/*----------------------------------
		*	Arranque real del sistema
		*----------------------------------*/
		$initialCore = true;
		/*----------------------------------
		*	Carga de definiciones y configuraciones
		*----------------------------------*/
		require 'Global/Config.php';
		//---//
		require 'Class/Class.Log.php';
		require 'Class/Class.Database.php';
		require 'Class/Class.System.php';
		require 'Class/Class.Shoutbox.php';
		
		DataBase::Connection();

		require 'Class/Class.Wall.php';
		require 'Class/Class.Register.php';
		/*----------------------------------
		*	Carga de las configuraciones
		*----------------------------------*/
		require 'Core.Settings.php';
		/*----------------------------------
		*	Carga del template fuente
		*----------------------------------*/
		require 'loadTemplate.php';
	}
	
?>