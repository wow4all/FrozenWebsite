<?php

class Register
{
	
	public static function doNewRegister($User, $Password, $Email, $Sex, $Name, $secondName, $Day, $Month, $Year, $Description)
	{
		$newUser 		 = mysql_real_escape_string($User);
		$mayusUser		 = strtoupper($User);
		$mayusEmail 	        = strtoupper($Email);
		$mayusPassword	 = strtoupper($Password);
		$securePassword	 = sha1($mayusEmail.":".$mayusPassword);
		$newPasswordWoW       = sha1($mayusUser.":".$mayusPassword);
		$newPassword 	        = mysql_real_escape_string($securePassword);
		$newEmail		 = mysql_real_escape_string($Email);
		$newSex  		 = mysql_real_escape_string($Sex);
		$newName 		 = mysql_real_escape_string($Name);
		$newSecondName	 = mysql_real_escape_string($secondName);
		$newDay 		 = mysql_real_escape_string($Day);
		$newMonth		 = mysql_real_escape_string($Month);
		$newYear		 = mysql_real_escape_string($Year);
		$birthdayGeneral = $newDay."-".$newMonth."-".$newYear;
		$newDescription 	 = mysql_real_escape_string($Description);
		
		$sqlServerRegister = "INSERT INTO ".AUTHDB.".account (`username`, `sha_pass_hash`, `email`, `expansion`) VALUES (upper('".$newUser."'), upper('".$newPasswordWoW."'), upper('".$newEmail."'), '2');"; 

		$sqlWebRegister = "INSERT INTO ".WEBDB.".basic_profile (`username`, `email`, `password`, `birthday`, `name`, `second_name`, `description`, `city`, `state`, `country`, `website`, `twitter`, `facebook`) VALUES (upper('".$newUser."'), upper('".$newEmail."'), upper('".$newPassword."'), upper('".$birthdayGeneral."'), upper('".$newName."'), upper('".$newSecondName."'), upper('".$newDescription."'), '', '', '', '', '', '');";
		
		Log::DBLog($sqlServerRegister);
		Log::DBLog($sqlWebRegister);
		
		$queryServerRegister = mysql_query($sqlServerRegister);
			$queryWebRegister = mysql_query($sqlWebRegister);
			
				if($queryServerRegister)
				{
					if($queryWebRegister)
							return true;
					else
					{
						Log::DBLog("MySQL Error: #".mysql_errno()." | Error ejecutando la consulta '$sqlWebRegister'");
							echo "Error";
					}
				}
				else
				{
					Log::DBLog("MySQL Error: #".mysql_errno()." | Error ejecutando la consulta '$sqlServerRegister'");
						echo "Error";
				}
	}
}
?>