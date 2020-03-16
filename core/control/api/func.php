<?php

include("core/control/api/api.php");

function load_news_general($title_business, $urlToImage_business, $url_business, $news){
	for($i = 0; $i <= $news; $i++){
	  echo'<div class="col-md-3 text-center">
	    <a target="_blank" href="'.$url_business[$i].'"> <img class="new_img_line" src="'.$urlToImage_business[$i].'"></a>
	   <p class="index_title_news">'.$title_business[$i].'</p>
	  </div>';
	}
}



function load_news_category($author, $title, $description, $url, $urlToImage, $publishedAt, $content){
	for($i = 0; $i <= 19; $i++){
		echo '<div class="col-md-6">
	           <img width="75%" height="100%" src="'.$urlToImage[$i].'">
	          </div>
	          <div class="col-md-6">
	           <a href="'.$url[$i].'" class="new_title_category">'.$title[$i].'</a>
	           <br><br>
	           <p class="new_creator_and_date">'.$author[$i].' - '.$publishedAt[$i].'</p>       
	           <p class="new_description">'.$description[$i].'</p>
	          </div>';
	     echo '<div class="col-md-12"><br><br></div>';
	}
}


?>
