<?php
/***************************************************************************
 *   Archivo:                   Class.System.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 09, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/

class System
{

	public static function getIdFromCookie()
	{
		if(isset($_COOKIE['u_login:s:a:true']))
		{
			$sqlId = "SELECT `user_id` FROM ".WEBDB.".`basic_profile` WHERE `password` = '".$_COOKIE['u_login:s:a:true']."'";
				$queryId = mysql_query($sqlId);
					$dataId = mysql_fetch_array($queryId);
						$Id = $dataId['user_id'];
							return $Id;	
		}
		else
			return false;
	}
	
	public static function getDate()
	{
		$Day = date('N');
			if($Day == 1) $Day = 'Lunes '.date('d');
			else if($Day == 2) $Day = 'Martes '.date('d');
			else if($Day == 3) $Day = 'Mi&eacute;rcoles '.date('d');
			else if($Day == 4) $Day = 'Jueves '.date('d');
			else if($Day == 5) $Day = 'Viernes '.date('d');
			else if($Day == 6) $Day = 'S&aacute;bado '.date('d');
			else $Day = 'Domingo '.date('d');
			
		$Month = date('n');
			if($Month == 1) $Month = 'Enero';
			else if($Month == 2) $Month = 'Febrero';
			else if($Month == 3) $Month = 'Marzo';
			else if($Month == 4) $Month = 'Abril';
			else if($Month == 5) $Month = 'Mayo';
			else if($Month == 6) $Month = 'Junio';
			else if($Month == 7) $Month = 'Julio';
			else if($Month == 8) $Month = 'Agosto';
			else if($Month == 9) $Month = 'Septiembre';
			else if($Month == 10) $Month = 'Octubre';
			else if($Month == 11) $Month = 'Noviembre';
			else $Month = 'Diciembre';
		
		$Year = date('Y');
		
		return $Day.", ".$Month.", ".$Year;
	}
	
	public static function checkStatus()
	{
		$puerto = "8085";
		$ip = "85.214.225.234";
			if(!$sock = @fsockopen($ip, $puerto, $num, $error,3))
				echo "Desconectado";
			else
			{
				echo "Conectado";
				fclose($sock);
			}

	}
	
	public static function getLastesPosts()
	{
		//To Do: Hacer algo mejor con esta variable y el valor seguro..
		$Limit = 5;
		
		$sqlPosts = "SELECT `id_msg`, `id_topic`, `subject` FROM ".WEBDB.".foro_messages WHERE `approved` = 1 ORDER BY `id_msg` DESC";
			$queryPosts = mysql_query($sqlPosts);
		
		if(!$queryPosts)
			return array();
		else
		{
			$return = DataBase::fetchArray($queryPosts);
			
			$new = array();
		
			for($i = 0; $Limit > $i; $i++)
				$new[] = $return[$i];
				
			$return = $new;
			
			return $return;
		}
	}
	
	public static function getLastesCharacters()
	{
		$Limit = 14;
		$sqlCharacters = "SELECT `guid`,`name`,`race`,`class`,`gender`,`level`, `online` FROM ".CHARDB.".characters ORDER BY `guid` DESC";
			$queryCharacters = mysql_query($sqlCharacters);
		
		if(!$queryCharacters)
			return array();
		else
		{
			$return = DataBase::fetchArray($queryCharacters);
			
			$new = array();
			
			for($i = 0; $Limit > $i; $i++)
				$new[] = $return[$i];
			
			$return = $new;
			
			return $return;
		
		}
	}
	
	public static function getIndexNews()
	{
		$Limit = 3;
		
		$sqlNews = "SELECT `id`, `subject`, `body` FROM ".WEBDB.".news ORDER BY `id` DESC";
			$queryNews = mysql_query($sqlNews);
		
		if(!$queryNews)
			return array();
		else
		{
			$return = DataBase::fetchArray($queryNews);
			
			$new = array();
		
			for($i = 0; $Limit > $i; $i++)
				$new[] = $return[$i];
				
			$return = $new;
			
			return $return;
		}
	}
	
	public static function playersOnline($type = 0)
	{
		if($type == 0)
		{
			$sqlUsersOnline = "SELECT * FROM ".CHARDB.".characters WHERE `online` = 1";
				$queryUsersOnline = mysql_query($sqlUsersOnline);
			
			if(!$queryUsersOnline)
				return "Error";
			elseif (DataBase::numRows($queryUsersOnline) < 1)
				$totalOnline = 0;
			else
			{
				while($usersOnline = mysql_fetch_array($queryUsersOnline))
				{
					$usersOnlineData = $usersOnline['online'];
					$totalOnline += $usersOnlineData;
				}
			}
				return $totalOnline;
		}
		else if($type == 1)
		{
			
		}
		else
		{
			
		}
	}
	
	public static function forumInfo($type = 0)
	{
		if($type == 0)
		{
			$sqlTotalPosts = "SELECT `id_topic` FROM ".WEBDB.".foro_messages ORDER BY `id_topic` DESC LIMIT 1";
				$queryTotalPosts = mysql_query($sqlTotalPosts);
					$totalPosts = mysql_fetch_array($queryTotalPosts);
						return $totalPosts['id_topic'];
		}
		elseif($type == 1)
		{
			$sqlTotalForumMessages = "SELECT `id_msg` FROM ".WEBDB.".foro_messages ORDER BY `id_msg` DESC LIMIT 1";
				$queryTotalForumMessages = mysql_query($sqlTotalForumMessages);
					$totalMessages = mysql_fetch_array($queryTotalForumMessages);
						return $totalMessages['id_msg'];
		}
		else
		{
			$sqlTotalForumUsers = "SELECT `id_member` FROM ".WEBDB.".foro_members ORDER BY `id_member` DESC LIMIT 1";
				$queryTotalForumUsers = mysql_query($sqlTotalForumUsers);
					$totalUsers = mysql_fetch_array($queryTotalForumUsers);
						return $totalUsers['id_member'];
		}
	}

	public static function uptime()
	{
		$puerto = "8085";
		$ip = "85.214.225.234";
			if(!$sock = @fsockopen($ip, $puerto, $num, $error,3))
			{
				return "Desconectado";
			}
			else
			{
				$sql_uptime = "SELECT max(`starttime`) FROM ".AUTHDB.".uptime";
					$query_uptime = mysql_query($sql_uptime);
				$uptime = time() - mysql_result ($query_uptime,0);  
					$sec = $uptime%60;  
				$uptime = intval ($uptime/60);  
					$min = $uptime%60;  
				$uptime = intval ($uptime/60);  
					$hours = $uptime%24;  
				$uptime = intval($uptime/24);    
					$days = $uptime;  
				return $days." d&iacute;a(s) ".$hours." hora(s) ".$min." minuto(s) ".$sec." segundo(s)";
			}
	}

}
?>