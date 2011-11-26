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
	DEFINE('URL_PATH', 'http://wow-frozen.servegame.com/System/Global/Templates/'.TEMPLATE);
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
	DEFINE('DESCRIPTION', 'Servidor privado del famoso MMORPG World of Warcraft . Contamos con un gran sistema general que permite la estabilidad y calidad
									que se pueda ofrecer utilizando un emulador privado, una base de datos privada y una web propia. 
									<br /><br />Con una conexi&oacute;n de 100mbps de subida, estable nos permite que el servidor jam&aacute;s se desconecte por razones de interconexiones con el servidor. Adem&aacute;s su rendimiento del servidor utilizando 4 Gb RAM y un procesador
									de 2x2.2GHz ofrecido por la compa&ntilde;&iacute;a Strato nos permiten que el sistema soporte de forma continua sin generar lag hasta 1,000 jugadores conectados simultaneamente.
									<br /><br />El equipo de desarrolladores del emulador es un equipo profesional, que a su ves desarrollan la base de datos y con continuas reparaciones que se hacen notar en el servidor
									y que hacen que la experiencia mejore poco a poco.<br /><br />
									As&iacute; mismo contamos con un equipo de Staff altamente calificado que ayudar&aacute; a resolver cualquier problema \'in-game\'.<br /><br />
									<b>&iquest;Qu&eacute; esperas para unirte?</b>');
?>