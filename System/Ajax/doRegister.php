<?php
	
	require "../Class/Class.Register.php";
	require "../Class/Class.Log.php";
	require "../Class/Class.Database.php";
	
	DataBase::Connection();

	if(isset($_POST['username']) 
		&& isset($_POST['email']) 
		&& isset($_POST['password'])
		&& isset($_POST['name'])
		&& isset($_POST['secondname'])
		&& isset($_POST['sex'])
		&& isset($_POST['day'])
		&& isset($_POST['month'])
		&& isset($_POST['year'])
		&& isset($_POST['description']))
	{
		$sqlCheckUsername = "SELECT username FROM ".AUTHDB.".account WHERE username = '".mysql_real_escape_string($_POST['username'])."'";
			$queryCheckUsername = mysql_query($sqlCheckUsername);
				if(mysql_num_rows($queryCheckUsername) > 0)
					echo "inUseUsername";
				else
				{
					$sqlCheckEmail = "SELECT username FROM ".AUTHDB.".account WHERE email = '".mysql_real_escape_string($_POST['email'])."'";
						$queryCheckEmail = mysql_query($sqlCheckEmail);
							if(mysql_num_rows($queryCheckEmail) > 0)
								echo "inUseEmail";
							else
							{
								Register::doNewRegister($_POST['username'], $_POST['password'], $_POST['email'], $_POST['sex'], $_POST['name'], $_POST['secondname'], $_POST['day'], $_POST['month'], $_POST['year'], $_POST['description']);
									return true;
							}
				}
	}
	else
	{
		Log::ErrorLog("No se enviaron los datos requeridos en el archivo 'doRegister.php' ");
		echo "Error";
		return false;
	}
	
?>