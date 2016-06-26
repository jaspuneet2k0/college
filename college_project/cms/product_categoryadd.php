<?php 
  session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
  include '../config/config.php';
  if( isset ($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else
  {
    $id = 0;
  }
	 
   
   ?>
<?php include '_head.php' ?>
<style>
    #category
	{
	 background-color: #428bca;
	}
</style>
  <body>
  
    
    <?php include 'header.php' ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9  col-md-10  main">
		<?php 
		    if($id == 1)
			{
			   ?>
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Product Category Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Product category Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add New Machine Category</h1>
		   
         <form action="product_categoryaddscript.php" method="post" role="form" enctype="multipart/form-data">
         
         <div class="form-group">
                 <label>Page Name</label>
                 <select class="form-control" name="page" required>
				 <option value="">Select Page</option>
				 <?php
				 $sql2 = "select * from page";
				 $result2 = mysql_query($sql2);
				 while($row2 = mysql_fetch_array($result2))
				 {
				 ?>
				 <?php echo $row2['page']; ?>
				    
				    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['page']; ?></option>
					<?php } ?>
				 </select>
                 
             </div>
           
			  <div class="form-group">
                 <label>Product Category</label>
                 <input class="form-control" name="category" type="text" required>
                 
             </div>
			 
			 <div class="form-group">
                 <label>Title</label>
                 <input class="form-control" name="title" type="text" required>
                 
             </div>
			  
			  
			   <div class="form-group">
                 <label>Keywords</label>
                 <input class="form-control" name="keywords" type="text" required>
                 
             </div>
			  
			   <div class="form-group">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text" required>
                 
             </div>
			 
			 <!-- <div class="form-group">
                 <label>Featured Image</label>
                 <input type="file"  name="file[]" required>
				 <p>Image Size : 170 x 170</p>
                 
             </div>-->
			 
			 <div class="form-group">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"></textarea>
              
             </div>
			 
			 
			 
			 
			 <button type="submit" class="btn">Submit</button>
		  
         </form>
         
		 
          
		  
        </div>
      </div>
    </div>
	
	
	<?php include 'footer.php' ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
