<?php
	error_reporting(0);
	
	$url = "http://newsapi.org/v2/top-headlines?country=".$country."&category=".$category."&apiKey=".$apikey."";

	$data = file_get_contents($url);
	$characters = json_decode($data, true);

	$totalResults = $characters['totalResults'];
	$author = [];
	$title = [];
	$description = [];
	$url = [];
	$urlToImage = [];
	$publishedAt = [];
	$content = [];

	$i = 1;

	$totalResults = $characters['totalResults'];

	for($i = 0; $i <= $news; $i++){

		$author[$i] = $characters['articles'][$i]['author'];
		$title[$i] = $characters['articles'][$i]['title'];
		$description[$i] = $characters['articles'][$i]['description'];
		$url[$i] = $characters['articles'][$i]['url'];
		$urlToImage[$i] = $characters['articles'][$i]['urlToImage'];
		$publishedAt[$i] = $characters['articles'][$i]['publishedAt'];
		$content[$i] = $characters['articles'][$i]['content'];
	}


?>