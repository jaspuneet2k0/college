<?php 
  session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
  if( isset ($_GET['id']))
  {
    $id = $_GET['id'];
  }
  else
  {
    $id = 0;
  }
	 
   
   ?>
  <?php  include '../config/config.php';
 include '_head.php'; ?>


<style>
    #media
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
                       Page Successfully Added.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add media Images</h1>
		   
         <form action="media-add-script.php" method="post" role="form" enctype="multipart/form-data">
           
			  
			  
			 
			 
			 
			  <div class="form-group">
                 <label>Select Category</label>
                 <select class="form-control" name="product" required>
				 <option value="">Select Category</option>
				 <?php
				 $sql2 = "select * from product";
				 $result2 = mysql_query($sql2);
				 while($row2 = mysql_fetch_array($result2))
				 {
				 ?>
				 <?php echo $row2['product']; ?>
				    
				    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['product']; ?></option>
					<?php } ?>
				 </select>
                 
             </div>
			 
			  
			  
			 
			  <div class="form-group">
                 <label class="col-xs-12">Image Upload</label>
				 
			     
                 <input class="form-control" name="file[]" type="file" id="upload" multiple>
				 
				<p>To choose multiple Images Press Ctrl</p>  
                
				
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
