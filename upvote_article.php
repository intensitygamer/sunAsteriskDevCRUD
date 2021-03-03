<?php 


if(isset($_GET['article_id'])){

	require 'connect.php';


	$article_id 		= $_GET['article_id'];


	mysqli_query($con, "UPDATE articles

						SET votes = votes + 1
					
						WHERE	article_id  = '$article_id'
	");

	header("Location: view_article.php?article_id=".$article_id);


}

?>