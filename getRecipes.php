<?php
$url = "recipeList.xml";

$feed = simplexml_load_file($url) or die("url: ".$url." not loading");
$array = $feed->xpath('recipe');

echo json_encode($array);
?>