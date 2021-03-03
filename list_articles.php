<?php include 'header.php'; ?>

	<style type="text/css">

	.article-content{

 		width: 50px; 
		height: 100px;
		overflow: hidden;
		text-overflow: ellipsis; 
 	 }

	</style>
	
	<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header">
                                    <h4 class="card-title">List of Articles </h4>
                                    <p class="card-category"> <a href="add_article.php" class="btn btn-success"> Add Article </a> </p>
                                </div>

                                <div class="card-body table-full-width table-responsive">
                                  
                                <?php 
                                	
                                	$articles_query = mysqli_query($con, "SELECT *  FROM articles ");
   										
                                 ?>  

                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Title </th>
                                            <th>Content </th>
                                            <th>Created Date</th>
                                            <th>Votes</th>
                                            <th></th>
                                        </thead>
                                    
                                    <?php while($row = mysqli_fetch_assoc($articles_query)){ ?>

                                        <tbody>

                                            <tr>
                                                <td><?php echo $row['article_id']; ?> </td>
                                                <td><?php echo $row['article_title']; ?> </td>
                                                <td class="article-content" ><?php echo $row['article_content']; ?> </td>
                                                <td><?php echo date("M d, Y", strtotime($row['created_date'])); ?> </td>
                                                <td><?php echo $row['votes']; ?> </td>
                                                <td> 
                                                	<a href="view_article.php?article_id=<?php echo $row['article_id']; ?>"> <i class="fa fa-eye"> </i> </a> 
                                                	<a href="edit_article.php?article_id=<?php echo $row['article_id']; ?>"> <i class="fa fa-edit"> </i> </a> 
                                                	<a href="remove_article.php?article_id=<?php echo $row['article_id']; ?>"> <i class="fa fa-eraser"> </i> </a> 
                                                </td>
                                            </tr>

                                        </tbody>

                                    <?php } ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
<?php include 'footer.php'; ?>


