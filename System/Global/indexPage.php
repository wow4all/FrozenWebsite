<?php
/***************************************************************************
 *   Archivo:                   indexPage.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 28, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	//T�tulo de la p�gina
	$Smarty -> assign('site_title', SITE_NAME);
	//Descripci�n de la p�gina
	$Smarty -> assign('site_description', DESCRIPTION);
	//Direcci�n del template 
	$Smarty -> assign('template_path', TEMPLATE_PATH);  
	//Nombre del Servidor
	$Smarty -> assign('server_name', SERVER_NAME);
	$Smarty -> display('index.tpl');
?>