<?php
/***************************************************************************
 *   Archivo:                   index.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 09, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	$Smarty -> template_dir = ROOT_PATH.'Global/Templates/'.TEMPLATE.'/';
	$Smarty -> compile_dir = ROOT_PATH.'Global/Templates/TemplatesCompilation';
	$Smarty -> config_dir = ROOT_PATH.'Configs/Config.php';

	$Smarty -> cache_dir = ROOT_PATH.'Global/Templates/Cache';
	
	$Smarty -> assign('prueba', 'Hola');
	
	$Smarty -> display('index.tpl');
?>