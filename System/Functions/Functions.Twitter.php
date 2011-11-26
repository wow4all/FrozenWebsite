<?
/* twitter-rss-to-html.php

Twitter-RSS-to-HTML for PHP by Rogers Cadenhead

Version 1.1
Web: http://www.cadenhead.org/workbench/twitter-rss-to-html
   
Copyright (C) 2008 Rogers Cadenhead

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA. */

// a PHP script to display Twitter updates from a user's RSS feed on a web page

require_once("Extras/rss_fetch.inc");
function printTwitter()
{
	$remote_url = "http://twitter.com/statuses/user_timeline/278901559.rss";
	$tweets_to_display = 1;
	$page = "http://wow-frozen.servegame.com";
	$username = "FrozenWoW";

	$rss = fetch_rss($remote_url);

	ob_start();

	$count = 1;
	$now = time();
	
	foreach ($rss->items as $item) {

	if ($tweets_to_display > 0) {
		if ($count > $tweets_to_display) {
			continue;
		}
	}
	$tweet = $item['description'];

	if ($page != "") {
		if (!strpos($tweet, $page) === false) {
			continue;
		}
	}

	$when = ($now - strtotime($item['pubdate']));
	$posted = "";
	if ($when < 60) {
		$posted = "Hace ". $when . " segundos";
	}
	if (($posted == "") & ($when < 3600)) {
		$posted = "Hace " . (floor($when / 60)) . " minutos";
	}
	if (($posted == "") & ($when < 7200)) {
		$posted = "Hace cerca de 1 hora";
	}
	if (($posted == "") & ($when < 86400)) {
		$posted = "Hace " . (floor($when / 3600)) . " horas";
	}
	if (($posted == "") & ($when < 172800)) {
		$posted = "Hace cerca de 1 días";
	}
	if ($posted == "") {
		$posted = "Hace ".(floor($when / 86400)) . " días";
	}

	$tweet = str_replace($username . ": ", "", $tweet);
	$tweet = preg_replace("/(http:\/\/)(.*?)\/([\w\.\/\&\=\?\-\,\:\;\#\_\~\%\+]*)/", "<a href=\"\\0\">Link</a>", $tweet);
	$tweet = preg_replace("(@([a-zA-Z0-9\_]+))", "<a href=\"http://www.twitter.com/\\1\">\\0</a>", $tweet);
	
	$tweet = htmlentities($tweet) . " <span class=\"tweetwhen\">" . htmlentities($posted) . "</span>";
		echo ("\n\n<p>" . $tweet);
	$count++;
}
	

// display output
ob_end_flush();
}
?>