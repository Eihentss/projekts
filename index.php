<?php 
include "functions.php";
$url = parse_url($_SERVER["REQUEST_URI"])["path"];


if($url == "/index") {
    include "controllers/index.php";
}elseif($url == "/about"){
    include "controllers/about.php";
}elseif($url == "/story"){
    include "controllers/story.php";
}elseif($url == "/posts"){
    include "controllers/posts.php";
}