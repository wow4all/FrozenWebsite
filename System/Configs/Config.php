<?php
/***************************************************************************
 *   Archivo:                   Config.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 26, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
/*
	Para Hacer:
		*En un futuro cambiar estas configuraciones a una base de datos.
		*El template será adaptado por medio de SMARTY en un futuro
*/
	/*
		Definición: HOST
		Retorno: localhost
		Comnetario: IP de conexión a la base de datos
	*/
	DEFINE("HOST", "localhost");
	/*
		Definición: USER
		Retorno: root
		Comentario: Usuario de conexión a la base de datos
	*/
	DEFINE("USER", "root");
	/*
		Definición: PASS
		Retorno: default
		Comentario: Contraseña de la base de datos
	*/
	DEFINE("PASS", "default");
	/*
		Definición: WEBDB
		Retorno: webdb
		Comentario: Base de datos con contenidos de la web
	*/
	DEFINE("WEBDB", "webdb");
	/*
		Definición: AUTH
		Retorno: auth
		Comentario: Base de datos con contenidos de cuenta
	*/
	DEFINE("AUTHDB", "auth");
	/*
		Definición: CHARDB
		Retorno: characters
		Comentario: Base de datos con contenidos de personajes
	*/
	DEFINE("CHARDB", "characters");
 
	/*
		Definición: TEMPLATE
		Retorno: FrozenSocial
		Comentario: Nombre del template en uso.
	*/
	DEFINE('TEMPLATE', 'FrozenSocial');
	/*
		Definición: URL_PATH
		Retorno: http://wow-frozen.servegame.com/System/Global/Templates/FrozenSocial
		Comentario: URL completa para el template (a excepción del nombre, este se toma de la definición TEMPLATE)
	*/
	DEFINE('URL_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/System/Global/Templates/'.TEMPLATE);
	/*
		Definición: SITE_NAME
		Retorno: Frozen WoW | Servidor Privado de World of Warcraft
		Comentario: Nombre del sitio
	*/
	DEFINE('SITE_NAME', 'Frozen WoW | Servidor Privado de World of Warcraft');
	/*
		Definición: SERVER_NAME
		Retorno: Frozen WoW
		Comentario: Nombre del servidor
	*/
	DEFINE('SERVER_NAME', 'Frozen WoW');
	/*
		Definición: CORE_NAME
		Retorno: MythCore v12.5
		Comentario: Nombre del Core utilizado en el servidor
	*/
	DEFINE('CORE_NAME', 'MythCore v12.5');
	/*
		Definición: DATABASE_NAME
		Retorno: MDB
		Comentario: Nombre de la Base de Datos utilizada en el servidor.
	*/
	DEFINE('DATABASE_NAME', 'MDB');
	/*
		Definición: REALM_NAME
		Retorno: Zet'Ghor
		Comentario: Nombre del reino
	*/
	DEFINE('REALM_NAME', 'Zet\'Ghor');
	/*
		Definición: GENERAL_RATES
		Retorno: 12
		Comentario: Rates generalizados del servidor
	*/
	DEFINE('GENERAL_RATES', 12);
	/*
		Definición: SERVER_TYPE
		Retorno: Blizzlike/High Rates/PvP
		Comentario: Tipo de servidor
	*/
	DEFINE('SERVER_TYPE', 'Blizzlike/High Rates/PvP');
	/* 
		Definición: DESCRIPTION
		Retorno: *Descripción del servidor
		Comentario: Descripción general del servidor
	*/
							//*
	DEFINE('DESCRIPTION', 'Servidor privado del famoso MMORPG World of Warcraft . Contamos con un gran sistema general que permite la estabilidad y calidad');
?>