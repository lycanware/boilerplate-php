<?php
namespace bin\Lycanware\Core\SSL;

abstract class Enforce
{
    public static function https()
    {
		if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
		    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
			ob_end_clean();
		    exit;
		}
	}
}

?>