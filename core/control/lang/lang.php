<?php


function load_lang_categorys($lang){
        if($lang == 'de'){
        	echo '<a class="nav-bar-header-menu" href="index.php?lang=de&country=de">home</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=de&country=de">geschäft</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=de&country=de">Unterhaltung</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=de&country=de">Allgemeines</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=de&country=de">Gesundheit</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=de&country=de">Wissenschaft</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=de&country=de">Sport</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=de&country=de">Technologie</a>';
	}else if($lang == 'fr'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=fr&country=fr">Accueil</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=fr&country=fr">affaires</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=fr&country=fr">divertissement</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=fr&country=fr">générale</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=fr&country=fr">santé</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=fr&country=fr">science</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=fr&country=fr">Esportes</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=fr&country=fr">Technologie</a>';
        }else if($lang == 'it'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=it&country=it">casa</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=it&country=it">negócio</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=it&country=it">entretenimento</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=it&country=it">geral</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=it&country=it">saúde</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=it&country=it">Ciência</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=it&country=it">sport</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=it&country=it">tecnologia</a>';
        }else if($lang == 'pt'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=pt&country=pt">casa</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=pt&country=pt">commerciale</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=pt&country=pt">divertimento</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=pt&country=pt">generale</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=pt&country=pt">Salute</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=pt&country=pt">scienza</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=pt&country=pt">sport</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=pt&country=pt">technologie</a>';
        }else if($lang == 'ro'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=ro&country=ro">Acasă</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=ro&country=ro">Afaceri</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=ro&country=ro">divertisment</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=ro&country=ro">general</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=ro&country=ro">sănătate</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=ro&country=ro">ştiinţă</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=ro&country=ro">sportiv</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=ro&country=ro">tehnologie</a>';
        }else if($lang == 'ru'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=ru&country=ru">дом</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=ru&country=ru">бизнес</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=ru&country=ru">дивертисмент</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=ru&country=ru">Общая</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=ru&country=ru">здоровье</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=ru&country=ru">наука</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=ru&country=ru">виды спорта</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=ru&country=ru">технологии</a>';
        }else if($lang == 'us'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=us&country=us">home</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=us&country=us">business</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=us&country=us">entertainment</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=us&country=us">general</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=us&country=us">health</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=us&country=us">science</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=us&country=us">sports</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=us&country=us">technology</a>';
        }else if($lang == 'mx'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=mx&country=mx">principal</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=mx&country=mx">Empresa</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=mx&country=mx">Entretenimiento</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=mx&country=mx">general</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=mx&country=mx">salud</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=mx&country=mx">ciencia</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=mx&country=mx">deportes</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=mx&country=mx">tecnología</a>';
        }else if($lang == 'co'){
                echo '<a class="nav-bar-header-menu" href="index.php?lang=co&country=co">principal</a>
                <a class="nav-bar-header-menu" href="news.php?category=business&lang=co&country=co">Empresa</a>
                <a class="nav-bar-header-menu" href="news.php?category=entertainment&lang=co&country=co">Entretenimiento</a>
                <a class="nav-bar-header-menu" href="news.php?category=general&lang=co&country=co">general</a>
                <a class="nav-bar-header-menu" href="news.php?category=health&lang=co&country=co">salud</a>
                <a class="nav-bar-header-menu" href="news.php?category=science&lang=co&country=co">ciencia</a>
                <a class="nav-bar-header-menu" href="news.php?category=sports&lang=co&country=co">deportes</a>
                <a class="nav-bar-header-menu" href="news.php?category=technology&lang=co&country=co">tecnología</a>';
        }
}

?>