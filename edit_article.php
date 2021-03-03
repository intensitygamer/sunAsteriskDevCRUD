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

                                <form action="update_article.php" method="POST">

	                                <div class="card-body table-full-width table-responsive">
	                           
	                                	<table class="table table-responsive">
	                                		<tr><td>Article Title: 
	                                			<td> <input type="text" name="article_title" value="<?php echo $articles_info['article_title']; ?>">
	                                		
	                                		<tr><td>Article Content: 

	                                				<td> <textarea name="article_content" rows= 15 cols = 50 >
	                                					<?php echo $articles_info['article_content']; ?>"
	                                					</textarea>
	                                  	</table>

	                                </div>

                        			<input type="hidden" value="<?php echo $article_id; ?>" name="article_id">

                        			<input type="submit" name="update_article" value="Update Article" class="btn btn-info">

                        		</form>
                      
                         	</div>
                    
                    </div>
              
                </div>
            
            </div>
		
		</div>

<?php include 'footer.php'; ?>


