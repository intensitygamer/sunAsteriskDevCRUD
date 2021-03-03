<?php 


if(isset($_POST['update_article'])){

	require 'connect.php';


	$article_id 		= $_POST['article_id'];
	$article_title 		= $_POST['article_title'];
	$article_content	= $_POST['article_content'];

	mysqli_query($con, "UPDATE articles

						SET article_title = '$article_title', 
							article_content = '$article_content'
					
						WHERE	article_id  = '$article_id'
");

	header("Location: list_articles.php");


}

?>