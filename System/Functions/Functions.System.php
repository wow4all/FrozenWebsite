<?php
/***************************************************************************
 *   Archivo:                   Functions.System.php
 *                            ------------------------
 *   Proyecto              : FrozenSocial
 *   Inicio                : Septiembre 28, 2011
 *   Última modificación   : Noviembre 08, 2011
 *   Copyright             : (C) 2011 iAsfo & Frozen WoW
 *
 ***************************************************************************/

	function reduceString($string = '', $limit = 0)
	{
		if(strlen($string) > $limit)
			$string = substr(trim($string), 0,$limit)."...";
		
		return $string;
	}
	
	function Errors($errorHead = '', $errorBody = '')
	{
		echo '<h1>'.$errorHead.'</h1>
				<p>'.$errorBody.'</p>';
	}
	
	
	function getRace($Race = 0, $Gender = 0)
	{
		if($Gender == 0)
		{
			if($Race == 1) $Race = 'Humano';
			else if($Race == 2) $Race = 'Orco';
			else if($Race == 3) $Race = 'Enano';
			else if($Race == 4) $Race = 'Elfo Nocturno';
			else if($Race == 5) $Race = 'No muerto';
			else if($Race == 6) $Race = 'Tauren';
			else if($Race == 7) $Race = 'Gnomo';
			else if($Race == 8) $Race = 'Troll';
			else if($Race == 10) $Race = 'Elfo de Sangre';
			else if($Race == 11) $Race = 'Draenei';
			else $Race = 'Desconocido';
		}
		else if($Gender = 1)
		{
			if($Race == 1) $Race = 'Humana';
			else if($Race == 2) $Race = 'Orca';
			else if($Race == 3) $Race = 'Enana';
			else if($Race == 4) $Race = 'Elfa Nocturna';
			else if($Race == 5) $Race = 'No muerta';
			else if($Race == 6) $Race = 'Tauren';
			else if($Race == 7) $Race = 'Gnoma';
			else if($Race == 8) $Race = 'Troll';
			else if($Race == 10) $Race = 'Elfa de Sangre';
			else if($Race == 11) $Race = 'Draenei';
			else $Race = 'Desconocida';
		}
		else
			$Race = 'Desconocida';
		
		return $Race;
	}
	
	function getCharacterAvatar($Race = 0, $Gender = 0, $Level = 0, $Class = 0)
	{
			if($Level <= 59)
				$avatar = 'wow-default/'.$Gender.'-'.$Race.'-'.$Class.'.gif';
			else if($Level > 59 && $Level <= 69)
				$avatar = 'wow/'.$Gender.'-'.$Race.'-'.$Class.'.gif';
			else if($Level > 69 && $Level < 79)
				$avatar = 'wow-70/'.$Gender.'-'.$Race.'-'.$Class.'.gif';
			else
				$avatar = 'wow-80/'.$Gender.'-'.$Race.'-'.$Class.'.gif';
				
			return $avatar;
	}
	
	function getClass($Class = 0, $Gender = 0)
	{
		if($Gender == 0)
		{
			if($Class == 1)	$Class = 'Guerrero';
			else if($Class == 2) $Class = 'Paladin';
			else if($Class == 3) $Class = 'Cazador';
			else if($Class == 4) $Class = 'P&iacute;caro';
			else if($Class == 5) $Class = 'Sacerdote';
			else if($Class == 6) $Class = 'Caballero de la Muerte';
			else if($Class == 7) $Class = 'Sham&aacute;n';
			else if($Class == 8) $Class = 'Mago';
			else if($Class == 9) $Class = 'Brujo';
			else if($Class == 11) $Class = 'Druida';
			else $Class = 'Desconocido';
		}
		else if($Gender == 1)
		{
			if($Class == 1)	$Class = 'Guerrera';
			else if($Class == 2) $Class = 'Paladina';
			else if($Class == 3) $Class = 'Cazadora';
			else if($Class == 4) $Class = 'P&iacute;cara';
			else if($Class == 5) $Class = 'Sacerdotiza';
			else if($Class == 6) $Class = 'Caballera de la Muerte';
			else if($Class == 7) $Class = 'Sham&aacute;na';
			else if($Class == 8) $Class = 'Maga';
			else if($Class == 9) $Class = 'Bruja';
			else if($Class == 11) $Class = 'Druida';
			else $Class = 'Desconocido';
		}
		else
			$Class = 'Desconocido';
		
		return $Class;
	}
?>