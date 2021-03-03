<?php 

require 'connect.php';

$article_id = $_GET['article_id'];

mysqli_query($con, "DELETE FROM articles WHERE article_id = '$article_id' ");

header("Location: list_articles.php");

?>