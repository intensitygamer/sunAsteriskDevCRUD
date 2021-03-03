<?php include 'header.php'; ?>

	<style type="text/css">
		
		textarea{
			resize: none !important;
		}

	</style>

	<?php 


	$article_id 	= $_GET['article_id'];

	$articles_query = mysqli_query($con, "SELECT * FROM articles WHERE article_id = '$article_id' ");

	$articles_info  = mysqli_fetch_assoc($articles_query);


	?>

		<div class="content">
            

            <div class="container-fluid">
                
                <div class="row">
                   
                   <div class="col-md-12">
                          
                          <div class="card strpied-tabled-with-hover">
                                <div class="card-header">
                                    <h4 class="card-title"> Articles </h4>
                                </div>

                                <form action="insert_article.php" method="POST">

	                                <div class="card-body table-full-width table-responsive">
	                           
	                                	<table class="table table-responsive">
	                                		<tr><td>Article Title: 
	                                			<td> <?php echo $articles_info['article_title']; ?>
	                                		
	                                		<tr><td>Article Content: 

	                                				<td> <?php echo $articles_info['article_content']; ?>
	                                		
	                                		<tr><td>Created Date: 

	                                				<td> <?php echo date("M d, Y", strtotime($articles_info['created_date'])); ?>
	                                		
	                                		<tr><td>Votes: 

	                                				<td> <?php echo $articles_info['votes']; ?>
	                                		

	                                  	</table>

	                                </div>
                        			
                        			<a href="upvote_article.php?article_id=<?php echo $article_id; ?>" class = 'btn btn-success'> Upvote Article </a>

                        			<a href="downvote_article.php?article_id=<?php echo $article_id; ?>" class = 'btn btn-danger'> Downvote Article </a>

  
                        		</form>
                      
                         	</div>
                    
                    </div>
              
                </div>
            
            </div>
		
		</div>

<?php include 'footer.php'; ?>


