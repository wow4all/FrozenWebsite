<?php


class Shoutbox
{
	public static function getMessages()
	{
		$Limit = 10;
		$sqlMessages = "SELECT `message`, `user`, `date` FROM ".WEBDB.".shoutbox ORDER BY `id` DESC";
			$queryMessages = mysql_query($sqlMessages);
		if(!$queryMessages)
			return array();
		else
		{
			$return = DataBase::fetchArray($queryMessages);
			
			$new = array();
		
			for($i = 0; $Limit > $i; $i++)
				$new[] = $return[$i];
				
			$return = $new;
			
			return $return;
		}

	}

	public static function receiveMessage($Message = 'null')
	{
		$vowels = array("�", "�", "�", "�", "�", "�", "�", "�", "�", "�");
		$newVowels = array("&aacute;", "&eacute;", "&iacute;" ,"&oacute;", "&uacute", "&Aacute;", "&Eacute;", "&Iacute;", "&Oacute;", "&Uacute;");
		$newMessage = str_replace($vowels, $newVowels, $Message);
			return $newMessage;
	}

}
?>