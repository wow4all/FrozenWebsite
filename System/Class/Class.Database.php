<?php
/***************************************************************************
 *   Archivo:                   Class.Database.php
 *                            ----------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 10, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/
	
class DataBase
{
	
	static function Connection()
	{

		$setConnection = @mysql_connect(HOST, USER, PASS) or die ("<h1>Error estableciendo la conexi&oacute;n</h1><p><ul><li><b>MySQL dice:</b> ".mysql_error()."</li><li><b>MySQL n&uacute;mero de error</b>: ".mysql_errno()."</li><li><b>Configuraciones actuales:</b> <ol><b>Host: </b>".HOST."</ol><ol><b>Usuario: </b>".USER."</ol><ol><b>Contrase&ntilde;a :</b>".PASS."</ol></li><li><b>Sugerencia: </b>Compruebe su configuraci&oacute;n en el archivo ".ROOT_PATH."Class/Class.Database.php</li></ul></p>".Log::DBLog("Error estableciendo la conexión")."");
		if(!$setConnection)
			Log::DBLog("Error estableciendo la conexión, retorno falso pero el error no mató la conexión");
		else
			return $setConnection;
		
	}
	
	static function AuthDatabase()
	{
		
		$authDatabase = @mysql_select_db(AUTHDB) or die ("".Log::DBLog("Error seleccionando la base de datos: ".AUTHDB)."");
			if(!$authDatabase)
				Log::DBLog("Error seleccionando la base de datos: ".AUTHDB.", retorno falso pero el error no mató la conexión");
			else
				return $authDatabase;
	}
	
	static function WebDatabase()
	{
		
		$webDatabase = @mysql_select_db(WEBDB) or die ("".Log::DBLog("Error seleccionando la base de datos: ".$this -> WebDb)."");
			if(!$webDatabase)
				Log::DBLog("Error seleccionando la base de datos: ".$this -> WebDb.", retorno falso pero el error no mató la conexión");
			else	
				return $webDatabase;
	}

	public static function fetchArray($query)
	{
		$result = array();

		while($row = mysql_fetch_array($query, MYSQL_ASSOC))
		{
			foreach($row as $k => $v)
			{
				$row[$k] = stripslashes($v);
			}

			$result[] = $row;
		}
		
		return $result;
	}
	
	public static function numRows($query = '')
	{
		return mysql_num_rows($query);
	}
	
	public static function secureQuery($query = '')
	{
		return mysql_real_escape_string($query);
	}
	
	public static function securePrintData($query = '')
	{
		return htmlentities(mysql_real_escape_string($query));
	}
}

?>