<?php
/***************************************************************************
 *   Archivo:                      index.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 /***************************************************************************
 *
 *	Configuraciones que deber�an ser mandadas al n�cleo...[No funcional]		
 *
 ***************************************************************************/
	if(!DEFINED('ASFO'))
	{
		/*----------------------------------
		*	Inclusi�n de seguridad al log
		*----------------------------------*/
		require 'Class/Class.Log.php';
		Log::HackLog("Se intent� acceder directamente a la direcci�n del archivo", "Core.Settings.php");
			echo "<h1>Error</h1><p>Intento de acceso directo, su IP ha sido almacenada y el archivo al cual intent&oacute; acceder</p>";
		exit();
	}
	
	require("Class/Class.Profile.php");
?>