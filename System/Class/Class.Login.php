 <?php

	require "Class.Database.php";
	
	DataBase::Connection();
	
class Login
{

	public static function checkUsername($Username)
	{
		$newUsername = mysql_real_escape_string($Username);
			$sqlCheckEmail = "SELECT `username` FROM ".WEBDB.".basic_profile WHERE `username` = upper('".$newUsername."')";
				$queryCheckUsername = mysql_query($sqlCheckUsername);
			if(!$queryCheckUsername)
				return false;
			else
				return true;
	}
	
	public static function doLogin($Username, $Password)
	{
		$newUsername = mysql_real_escape_string($Username);
		$newPassword = mysql_real_escape_string($Password);
		$mayusUsername = strtoupper($Username);
		$mayusPassword = strtoupper($Password);
		$secureSession = strtoupper(sha1($mayusUsername.":".$mayusPassword));
			$sqlCheckSession = "SELECT `user_id`, `username`, `password` FROM ".WEBDB.".basic_profile WHERE `username` = upper('".$newUsername."')";
				$queryCheckSession = mysql_query($sqlCheckSession);
		if(!$queryCheckSession)
			return false;
		else
		{
			while($checkData = mysql_fetch_array($queryCheckSession))
			{
				$usernameData = $checkData['username'];
				$passwordData = $checkData['password'];
				$idData = $checkData['user_id'];
			}
			
			if(strtoupper($secureSession) == strtoupper($passwordData))
			{
				if(strtoupper($usernameData) == strtoupper($Username))
				{
					setcookie("u_login:s:a:true", $passwordData, time() + (60*60*24*365), "/");
					return true;
				}
				else
					return false;
			}
			else
				return false;
		}
		
	}
}
?>