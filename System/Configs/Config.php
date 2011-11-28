<?php
/***************************************************************************
 *   Archivo:                   Config.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 26, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
/*
	Para Hacer:
		*En un futuro cambiar estas configuraciones a una base de datos.
		*El template ser� adaptado por medio de SMARTY en un futuro
*/
	/*
		Definici�n: HOST
		Retorno: localhost
		Comnetario: IP de conexi�n a la base de datos
	*/
	DEFINE("HOST", "localhost");
	/*
		Definici�n: USER
		Retorno: root
		Comentario: Usuario de conexi�n a la base de datos
	*/
	DEFINE("USER", "root");
	/*
		Definici�n: PASS
		Retorno: default
		Comentario: Contrase�a de la base de datos
	*/
	DEFINE("PASS", "default");
	/*
		Definici�n: WEBDB
		Retorno: webdb
		Comentario: Base de datos con contenidos de la web
	*/
	DEFINE("WEBDB", "webdb");
	/*
		Definici�n: AUTH
		Retorno: auth
		Comentario: Base de datos con contenidos de cuenta
	*/
	DEFINE("AUTHDB", "auth");
	/*
		Definici�n: CHARDB
		Retorno: characters
		Comentario: Base de datos con contenidos de personajes
	*/
	DEFINE("CHARDB", "characters");
 
	/*
		Definici�n: TEMPLATE
		Retorno: FrozenSocial
		Comentario: Nombre del template en uso.
	*/
	DEFINE('TEMPLATE', 'FrozenSocial');
	/*
		Definici�n: URL_PATH
		Retorno: http://wow-frozen.servegame.com/System/Global/Templates/FrozenSocial
		Comentario: URL completa para el template (a excepci�n del nombre, este se toma de la definici�n TEMPLATE)
	*/
	DEFINE('URL_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/System/Global/Templates/'.TEMPLATE);
	/*
		Definici�n: SITE_NAME
		Retorno: Frozen WoW | Servidor Privado de World of Warcraft
		Comentario: Nombre del sitio
	*/
	DEFINE('SITE_NAME', 'Frozen WoW | Servidor Privado de World of Warcraft');
	/*
		Definici�n: SERVER_NAME
		Retorno: Frozen WoW
		Comentario: Nombre del servidor
	*/
	DEFINE('SERVER_NAME', 'Frozen WoW');
	/*
		Definici�n: CORE_NAME
		Retorno: MythCore v12.5
		Comentario: Nombre del Core utilizado en el servidor
	*/
	DEFINE('CORE_NAME', 'MythCore v12.5');
	/*
		Definici�n: DATABASE_NAME
		Retorno: MDB
		Comentario: Nombre de la Base de Datos utilizada en el servidor.
	*/
	DEFINE('DATABASE_NAME', 'MDB');
	/*
		Definici�n: REALM_NAME
		Retorno: Zet'Ghor
		Comentario: Nombre del reino
	*/
	DEFINE('REALM_NAME', 'Zet\'Ghor');
	/*
		Definici�n: GENERAL_RATES
		Retorno: 12
		Comentario: Rates generalizados del servidor
	*/
	DEFINE('GENERAL_RATES', 12);
	/*
		Definici�n: SERVER_TYPE
		Retorno: Blizzlike/High Rates/PvP
		Comentario: Tipo de servidor
	*/
	DEFINE('SERVER_TYPE', 'Blizzlike/High Rates/PvP');
	/* 
		Definici�n: DESCRIPTION
		Retorno: *Descripci�n del servidor
		Comentario: Descripci�n general del servidor
	*/
							//*
	DEFINE('DESCRIPTION', 'Servidor privado del famoso MMORPG World of Warcraft . Contamos con un gran sistema general que permite la estabilidad y calidad');
?>