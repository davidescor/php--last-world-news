<?php

include("core/config.php");
include("core/control/lang/lang.php");

if(isset($_GET["lang"])){
	$lang = $_GET["lang"];
}

if(isset($_GET["category"])){
	$category = $_GET["category"];
}

switch ($lang){
	case "co":
		$country = 'co';
		include("core/control/api/func.php");
		break;

	case "de":
		$country = 'de';
		include("core/control/api/func.php");
		break;

	case "fr":
		$country = 'fr';
		include("core/control/api/func.php");
		break;
	case "it":
		$country = 'it';
		include("core/control/api/func.php");
		break;

	case "mx":
		$country = 'mx';
		include("core/control/api/func.php");
		break;

	case "pt":
		$country = 'pt';
		include("core/control/api/func.php");
		break;

	case "ro":
		$country = 'ro';
		include("core/control/api/func.php");
		break;

	case "ru":
		$country = 'ru';
		include("core/control/api/func.php");
		break;

	case "us":
		$country = 'us';
		include("core/control/api/func.php");
		break;

}


?>
