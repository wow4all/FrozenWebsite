<?php
/***************************************************************************
 *   Archivo:                  Class.Profile.php
 *                            -------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 07, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/

	require ROOT_PATH."Functions/Functions.Twitter.php";
	require ROOT_PATH."Functions/Functions.System.php";
	
	DataBase::Connection();

class Profile extends System
{
	public static function getFullName()
	{
		$sqlFullName = "SELECT `name`, `second_name` FROM ".WEBDB.".basic_profile WHERE user_id = '".System::getIdFromCookie()."'";
			$queryFullName = mysql_query($sqlFullName);
			if(!$queryFullName)
				return "Error";
			else
			{
				$name = "";
				$secondName = "";
				while($nameData = mysql_fetch_array($queryFullName))
				{
					$name = $nameData['name'];
					$secondName = $nameData['second_name'];
				}
				
				//ToDo: Fix this :/
				if($name == null)
					$name = "Error";
				if($secondName == null)
					$secondName = "Error";
				
				$generalName = $name." ".$secondName;
					return $generalName;
			}
	
	}
	
	public static function getName()
	{
		$sqlName = "SELECT `name`  FROM ".WEBDB.".basic_profile WHERE user_id = '".System::getIdFromCookie()."'";
			$queryName = mysql_query($sqlName);
			if(!$queryName)
				return "Error";
			else
			{
				$nameData = mysql_fetch_array($queryName);
					$name = $nameData['name'];
				
				return $name;
			}
	}

	public static function getDescription()
	{
		$sqlDescription = "SELECT `description` FROM ".WEBDB.".basic_profile WHERE user_id = '".System::getIdFromCookie()."'";
			$queryDescription = mysql_query($sqlDescription);
			if(!$queryDescription)
				return "Error";
			else
			{
				$description = "";
				
				while($descriptionData = mysql_fetch_array($queryDescription))
				{
					$description = $descriptionData['description'];
				}
			
				return $description;
			}
	
	}
	
	public static function getUsername($getId)
	{
		$sqlUsername = "SELECT `username` FROM ".WEBDB.".basic_profile WHERE `user_id` = '".System::getIdFromCookie()."'";
			$queryUsername = mysql_query($sqlUsername);
			if(!$queryUsername)
				return "Error";
			else
			{
				$username = "Error-Username";
				while($usernameData = mysql_fetch_array($queryUsername))
				{
					$username = $usernameData['username'];
				}
				return $username;
			}
				
	}
}
?>