<?php
include("core/control/api/api.php");

	function load_news_general($author, $title, $description, $url, $urlToImage, $publishedAt, $content, $news){
		for($i = 0; $i <= $news; $i++){
			echo '<div class="col-md-1"></div>
		          <div class="col-md-4">
		           <img class="new_img" src="'.$urlToImage[$i].'">
		          </div>
		          <div class="col-md-6">
		           <a href="'.$url[$i].'" class="new_title_category">'.$title[$i].'</a>
		           <br><br>
		           <p class="new_creator_and_date">'.$author[$i].' - '.$publishedAt[$i].'</p>       
		           <p class="new_description">'.$description[$i].'</p>
		          </div><div class="col-md-1"></div>';
		     echo '<div class="col-md-12"><br><br></div>';
		}
	}


	function load_news_category($author, $title, $description, $url, $urlToImage, $publishedAt, $content){
		for($i = 0; $i <= 19; $i++){
			echo '<div class="col-md-1"></div>
		          <div class="col-md-4">
		           <img class="new_img" src="'.$urlToImage[$i].'">
		          </div>
		          <div class="col-md-6">
		           <a href="'.$url[$i].'" class="new_title_category">'.$title[$i].'</a>
		           <br><br>
		           <p class="new_creator_and_date">'.$author[$i].' - '.$publishedAt[$i].'</p>       
		           <p class="new_description">'.$description[$i].'</p>
		          </div><div class="col-md-1"></div>';
		     echo '<div class="col-md-12"><br><br></div>';
		}
	}


?>
