<?php
include "functions.php";
echo "hi";
$connection_string = "mysql:host=localhost;port=3306;dbname=blog_eihents;user=root;password=;charset=utf8mb4";
$connection = new PDO($connection_string);
$query=$connection->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
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