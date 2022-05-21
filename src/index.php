<?php

namespace App;

require("./Author.php");
require("./Category.php");
require("./Post.php");


$author = new Author(1, 
"carlosdsanjuan@outlook.com", 
"carlosdsanjuan@outlook.com", 
"Carlos", "Sanjuan");

$category = new Category(1, "PHP");

$post = new Post(1,
"My first post",
"This is my first post",
"2020-01-01",
"2020-01-01");
$post->setAuthor($author);
$post->setCategory($category);



echo "<pre>";
print_r($author);
echo "<pre>";
print_r($user);
echo "<pre>";
print_r($category);
echo "<pre>";
print_r($post);