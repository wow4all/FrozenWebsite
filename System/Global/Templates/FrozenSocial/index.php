<?php
/***************************************************************************
 *   Archivo:                   index.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 09, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
/***************************************************************************
 *
 *		Inicio del sistema
 *
 ***************************************************************************/
		if(	isset($_COOKIE['u_login:s:a:true']) )
		{
			require 'plugins/profile.php';
		}
		else
		{
			if(isset($_GET['page']) && $_GET['page'] == 'registro' && !isset($_COOKIE['u_register:temp:false']))
				require 'plugins/newRegister.php';
			elseif(isset($_GET['page']) && $_GET['page'] == 'registro' && isset($_GET['section']) && $_GET['section'] == 2 && isset($_COOKIE['u_register:temp:false']))
				require 'plugins/newRegisterSecondStep.php';
			else
				require 'plugins/noLogin.php';
		}
		
?>