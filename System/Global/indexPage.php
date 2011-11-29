<?php
/***************************************************************************
 *   Archivo:                   indexPage.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 28, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	//Título de la página
	$Smarty -> assign('site_title', SITE_NAME);
	//Descripción de la página
	$Smarty -> assign('site_description', DESCRIPTION);
	//Dirección del template 
	$Smarty -> assign('template_path', TEMPLATE_PATH);  
	//Nombre del Servidor
	$Smarty -> assign('server_name', SERVER_NAME);
	$Smarty -> display('index.tpl');
?>