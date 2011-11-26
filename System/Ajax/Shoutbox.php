<?php	
	require "../Class/Class.Shoutbox.php";
	require "../Class/Class.Database.php";
	require "../Class/Class.System.php";
	
	Database::Connection();
	if(isset($_POST['mensaje']))
	{
		//To Do: Arreglar el "anónimo"
		$newMessage = Shoutbox::receiveMessage($_POST['mensaje']);
		$sqlPost = "INSERT INTO ".WEBDB.".shoutbox (`user`, `date`, `message`) VALUES ('Anónimo', '".System::getDate()."', '".$newMessage."')";
			$queryPost = mysql_query($sqlPost);
		if(!$queryPost)
			return "Error";
	}

	foreach(Shoutbox::getMessages() as $Message)
	{
		echo '<b>'.htmlentities($Message['user']).'</b>-'.htmlentities($Message['date']).':'.$Message['message'].'<br />';
	}
?>