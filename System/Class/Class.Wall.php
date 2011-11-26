<?php

class Wall{

	public static function timeStamp($sessionTime)
	{
		$time_difference = time() - $sessionTime ; 
		$seconds = $time_difference ; 
		$minutes = round($time_difference / 60 );
		$hours = round($time_difference / 3600 ); 
		$days = round($time_difference / 86400 ); 
		$weeks = round($time_difference / 604800 ); 
		$months = round($time_difference / 2419200 ); 
		$years = round($time_difference / 29030400 ); 

		if($seconds <= 60)
			return "hace ".$seconds." segundos"; 
		else if($minutes <=60)
		{
			if($minutes==1)
				return "hace 1 minuto"; 
			else
				return "hace ".$minutes." minutos"; 
		}
		else if($hours <=24)
		{
			if($hours==1)
				return "hace una hora";
			else
				return "hace $hours horas";
		}
		else if($days <=7)
		{
			if($days==1)
				return "hace un d&iacute;a";
			else
				return "hace $days d&iacute;as";
		}
		else if($weeks <=4)
		{
			if($weeks==1)
				return "hace una semana";
			else
				echo"hace $weeks semanas";
		}
		else if($months <=12)
		{
			if($months==1)
				return "hace un mes";
			else
				return "hace $months meses";
		}
		else
		{
			if($years==1)
				return "hace un a&ntilde;o";
			else
				return "hace $years a&ntilde;os";
		}
	}
	public static function toLink($text)
	{
		$text = html_entity_decode(trim($text));
		$text = " ".$text;
		$text = preg_replace('/(((f|ht){1}tp:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i','\\1', $text);
		$text = preg_replace('/(((f|ht){1}tps:\/\/)[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i','\\1', $text);
		$text = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&\/\/=]+)/i','\\1\\2', $text);
		$text = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/i','\\1', $text);
			return $text;
	}
	
	public static function getWallMessages($uid) 
	{
		$Limit = 20;
		
	    $sqlMessages = "SELECT M.msg_id, M.uid_fk, M.message, M.created, U.username FROM ".WEBDB.".messages M, ".WEBDB.".users U  WHERE M.uid_fk=U.uid and M.uid_fk='$uid' order by M.msg_id DESC";
			$queryMessages = mysql_query($sqlMessages);
		
		if(!$queryMessages)
			return array();
		else
		{
			$return = DataBase::fetchArray($queryMessages);
			
			$new = array();
			
			for($i = 0; $Limit > $i; $i++)
				$new = $return[$i];
				
			$return = $new;
			
			return $return;
		}
		
    }
	
	public static function Comments($msg_id) 
	{
	    $query = mysql_query("SELECT C.com_id, C.uid_fk, C.comment, C.created, U.username FROM comments C, users U WHERE C.uid_fk=U.uid and C.msg_id_fk='$msg_id' order by C.com_id asc ") or die(mysql_error());
	   while($row=mysql_fetch_array($query))
	    $data[]=$row;
        if(!empty($data))
		{
       return $data;
         }
	}
	
	public function Insert_Update($uid, $update) 
	{
	$update=htmlentities($update);
	   $time=time();
	   $ip=$_SERVER['REMOTE_ADDR'];
        $query = mysql_query("SELECT msg_id,message FROM `messages` WHERE uid_fk='$uid' order by msg_id desc limit 1") or die(mysql_error());
        $result = mysql_fetch_array($query);
		
        if ($update!=$result['message']) {
            $query = mysql_query("INSERT INTO `messages` (message, uid_fk, ip,created) VALUES ('$update', '$uid', '$ip','$time')") or die(mysql_error());
            $newquery = mysql_query("SELECT M.msg_id, M.uid_fk, M.message, M.created, U.username FROM messages M, users U where M.uid_fk=U.uid and M.uid_fk='$uid' order by M.msg_id desc limit 1 ");
            $result = mysql_fetch_array($newquery);
			 return $result;
        } 
		else
		{
				 return false;
		}
		
       
    }
	
	public static function Delete_Update($uid, $msg_id) 
	{
	    $query = mysql_query("DELETE FROM `comments` WHERE msg_id_fk = '$msg_id' ") or die(mysql_error());
        $query = mysql_query("DELETE FROM `messages` WHERE msg_id = '$msg_id' and uid_fk='$uid'") or die(mysql_error());
        return true;
      	       
    }
	
	public static function Insert_Comment($uid,$msg_id,$comment) 
	{
	$comment=htmlentities($comment);
	   	    $time=time();
	   $ip=$_SERVER['REMOTE_ADDR'];
        $query = mysql_query("SELECT com_id,comment FROM `comments` WHERE uid_fk='$uid' and msg_id_fk='$msg_id' order by com_id desc limit 1 ") or die(mysql_error());
        $result = mysql_fetch_array($query);
    
		if ($comment!=$result['comment']) {
            $query = mysql_query("INSERT INTO `comments` (comment, uid_fk,msg_id_fk,ip,created) VALUES ('$comment', '$uid','$msg_id', '$ip','$time')") or die(mysql_error());
            $newquery = mysql_query("SELECT C.com_id, C.uid_fk, C.comment, C.msg_id_fk, C.created, U.username FROM comments C, users U where C.uid_fk=U.uid and C.uid_fk='$uid' and C.msg_id_fk='$msg_id' order by C.com_id desc limit 1 ");
            $result = mysql_fetch_array($newquery);
         
		   return $result;
        } 
		else
		{
		return false;
		}
       
    }
	
	public function Delete_Comment($uid, $com_id) 
	{
	    $query = mysql_query("DELETE FROM `comments` WHERE uid_fk='$uid' and com_id='$com_id'") or die(mysql_error());
        return true;
      	       
    }
}
?>