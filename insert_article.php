<?php 


if(isset($_POST['submit_article'])){

	require 'connect.php';

	$article_title 		= $_POST['article_title'];
	$article_content	= $_POST['article_content'];

	mysqli_query($con, "INSERT INTO articles (article_title, article_content) 
						VALUES ('$article_title', '$article_content') ");

	header("Location: list_articles.php");

}

?>