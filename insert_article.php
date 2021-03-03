<?php 


$con = mysqli_connect("localhost", "root", "", "sunasterisk_dev_exam");

$article_title 		= $_POST['article_title'];
$article_content	= $_POST['article_content'];

mysqli_query($con, "INSERT INTO articles (article_title, article_content) 
					VALUES ('$article_title', '$article_content') ");

header("Location: list_articles.php");

?>