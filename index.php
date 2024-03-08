<?php
include "functions.php";
$config=include "config.php";
include "Database.php";

echo "hi";
$db = new Database($config);
$posts = $db->execute("SELECT * FROM posts");


echo "<h1>Posts</h1>";
echo "<ol>";

foreach($posts as $post){
    echo "<li>";
    echo $post["title"];
    echo "</li>";
}
echo "</ol>";


/*
CREATE DATABASE blog_eihents;
USE blog_eihents;
CREATE TABLE posts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL
);

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");
*/