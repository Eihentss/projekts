<?php
    $page_title = "index";
    include "functions.php";
    $config=include "config.php";
    include "Database.php";

$db = new Database($config);
$query_string = "SELECT * FROM posts";
$params = [];
if (isset($_GET["id"]) && $_GET["id"] !="") {
    $query_string .= " WHERE id=:id";
    $params[":id"] = $_GET["id"];
}

if (isset($_GET["name"]) && $_GET["name"]!="") {
    $query_string .= " JOIN categories ON posts.category_id = categories.id WHERE name=:name";
    $params[":name"] = $_GET["name"];
}

$posts = $db->execute($query_string, $params);
include "views/index.view.php";






