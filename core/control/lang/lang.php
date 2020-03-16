<?php


function load_lang_categorys($lang){
	if($lang == 'us'){
		echo '<a class="nav-bar-header-menu" href="index.php?lang=us&country=us">home</a>
        <a class="nav-bar-header-menu" href="news.php?category=business&lang=us&country=us">business</a>
        <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=us&country=us">entertainment</a>
        <a class="nav-bar-header-menu" href="news.php?category=general&lang=us&country=us">general</a>
        <a class="nav-bar-header-menu" href="news.php?category=health&lang=us&country=us">health</a>
        <a class="nav-bar-header-menu" href="news.php?category=science&lang=us&country=us">science</a>
        <a class="nav-bar-header-menu" href="news.php?category=sports&lang=us&country=us">sports</a>
        <a class="nav-bar-header-menu" href="news.php?category=technology&lang=us&country=us">technology</a>';
	}if($lang == 'de'){
		echo '<a class="nav-bar-header-menu" href="index.php?lang=de&country=de">home</a>
        <a class="nav-bar-header-menu" href="news.php?category=business&lang=de&country=de">geschäft</a>
        <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=de&country=de">Unterhaltung</a>
        <a class="nav-bar-header-menu" href="news.php?category=general&lang=de&country=de">Allgemeines</a>
        <a class="nav-bar-header-menu" href="news.php?category=health&lang=de&country=de">Gesundheit</a>
        <a class="nav-bar-header-menu" href="news.php?category=science&lang=de&country=de">Wissenschaft</a>
        <a class="nav-bar-header-menu" href="news.php?category=sports&lang=de&country=de">Sport</a>
        <a class="nav-bar-header-menu" href="news.php?category=technology&lang=de&country=de">Technologie</a>';
	}

}

?>