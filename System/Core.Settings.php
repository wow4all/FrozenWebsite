<?php
/***************************************************************************
 *   Archivo:                      index.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 /***************************************************************************
 *
 *	Configuraciones que deberían ser mandadas al núcleo...[No funcional]		
 *
 ***************************************************************************/
	if(!DEFINED('ASFO'))
	{
		/*----------------------------------
		*	Inclusión de seguridad al log
		*----------------------------------*/
		require 'Class/Class.Log.php';
		Log::HackLog("Se intentó acceder directamente a la dirección del archivo", "Core.Settings.php");
			echo "<h1>Error</h1><p>Intento de acceso directo, su IP ha sido almacenada y el archivo al cual intent&oacute; acceder</p>";
		exit();
	}
	
	require("Class/Class.Profile.php");
?>