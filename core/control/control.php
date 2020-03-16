<?php

include("core/config.php");
include("core/control/lang/lang.php");

if(isset($_GET["lang"]) =='us'){
	$lang = $_GET["lang"];
}else if(isset($_GET["lang"]) =='de'){
	$lang = $_GET["lang"];
}

if(isset($_GET["category"])){
	$category = $_GET["category"];
}

switch ($lang){

	case "de":
		$country = 'de';
		include("core/control/api/func.php");
		break;

	case "us":
		$country = 'us';
		include("core/control/api/func.php");
		break;
}


?>
