<?php
/***************************************************************************
 *   Archivo:                   main.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 28, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	$Smarty -> template_dir = ROOT_PATH.'Global/Templates/'.TEMPLATE.'/';
	$Smarty -> compile_dir = ROOT_PATH.'Global/Templates/TemplatesCompilation';
	$Smarty -> config_dir = ROOT_PATH.'Configs/Config.php';
	$Smarty -> cache_dir = ROOT_PATH.'Global/Templates/Cache';
	
	if(!isset($_GET['page']))
		$getPage = 'index';
	else
		$getPage = $_GET['page'];
		
	switch($getPage)
	{
		case 'index':
				require 'indexPage.php';
			break;
		case 'perfil':
				if(isset($_COOKIE['u_login:s:a:true']))
					require 'Profile.php';
				else
					require 'indexPage.php';
			break;
		case 'registro':
				if(isset($_GET['page']) && $_GET['page'] == 'registro')
					require 'Register.php';
				else
					require 'noLogin.php';
			break;
	}

?>