<?php
/***************************************************************************
 *   Archivo:                   Class.Log.php
 *                            ------------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   �ltima modificaci�n   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
if(!DEFINED('ROOT_PATH'))
	define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
	
class Log
{
	
	static function DBLog($text = "")
	{
		if(strlen($text) == 0)
		{
			$openFile = fopen(ROOT_PATH."Class/Logs/db_log.txt", "a");
			fwrite($openFile, "\n<<< [ErrorLog]:Error de recepci�n de texto | Mysql no respondi�");
			fclose($openFile);
		}
		else
		{
			$openFile = fopen(ROOT_PATH."Class/Logs/db_log.txt", "a");		
			fwrite($openFile, "\n[".date('d')."-".date('F')."-".date('Y')." ".date('h').":".date('i')." ".date('a')."] ".$text);
			fclose($openFile);
		}
	}
	
	static function ErrorLog($text = "")
	{
		if(strlen($text) == 0)
		{
			$openFile = fopen(ROOT_PATH."Class/Logs/errors_log.txt", "a");
			fwrite($openFile, "\n<<< [ErrorLog]:Error de recepci�n de texto | El texto real no respondi� a la petici�n");
			fclose($openFile);
		}
		else
		{
			$openFile = fopen(ROOT_PATH."Class/Logs/errors_log.txt", "a");
			fwrite($openFile, "\n[".date('d')."-".date('F')."-".date('Y')." ".date('h').":".date('i')." ".date('a')."] ".$text);
			fclose($openFile);
		}
	
	}
	/*------------------------------------------------------
	*	To Do:
	*		Arreglar que pueda ser incluido en cualquier
	*		parte de la web
	*------------------------------------------------------*/
	static function HackLog($text = "", $file = NULL)
	{
		if(strlen($text) == 0)
		{
			$openFile = fopen(ROOT_PATH."Class/Logs/hacks_log.txt", "a");
			fwrite($openFile, "\n<<< [ErrorLog]:Error de rececpi�n de texto | El texto real no respondi� a la petici�n");
			fclose($openFile);
		}
		else
		{
			if (!empty($_SERVER['HTTP_CLIENT_IP']))
				$findIP = $_SERVER['HTTP_CLIENT_IP'];
			if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
				$findIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
			$findIP = $_SERVER['REMOTE_ADDR'];
			
			$openFile = fopen(ROOT_PATH."Class/Logs/hacks_log.txt", "a");
			fwrite($openFile, "\n[".date('d')."-".date('F')."-".date('Y')." ".date('h').":".date('i')." ".date('a')."] [IP: ".$findIP."] [Acceso Al Archivo: ".$file."] ".$text);
			fclose($openFile);
		}
	}
}
?>