<?php
/***************************************************************************
 *   Archivo:                      index.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Octubre 3, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
 /***************************************************************************
 *
 *		Inicio de Configuraciones de arranque
 *
 ***************************************************************************/
/* ----------------------------------------------
*	Definición de seguridad
* ----------------------------------------------*/
	DEFINE('ASFO', true);
/* ----------------------------------------------
*	Debug de la página
* ----------------------------------------------*/
	DEFINE('FROZEN_DEBUG', false);
/* ----------------------------------------------
*	Modo activo del servidor (No mantenimiento)
* ----------------------------------------------*/
	DEFINE('FROZEN_ACTIVE', true);
/* ----------------------------------------------
*	Arranque del sistema
* ----------------------------------------------*/
	require 'System/Core.init.php';
?>