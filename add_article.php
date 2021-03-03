<?php include 'header.php'; ?>

	<style type="text/css">
		
		textarea{
			resize: none !important;
		}

	</style>

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
	                                			<td> <input type="text" name="article_title">
	                                		
	                                		<tr><td>Article Content: 

	                                				<td> <textarea rows= 15 cols = 50>
	                                							
	                                					 </textarea>
	                                  	</table>

	                                </div>
                        			
                        			<input type="submit" name="submit_article" value="Submit Article" class="btn btn-info">

                        		</form>
                      
                         	</div>
                    
                    </div>
              
                </div>
            
            </div>
		
		</div>

<?php include 'footer.php'; ?>


