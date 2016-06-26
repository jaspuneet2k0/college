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
    #specification
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
                       Product Specification Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Product Specification Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add New Product Specification</h1>
		   
         <form action="specificationaddscript.php" method="post" role="form" enctype="multipart/form-data">
           
			 <!-- <div class="form-group">
                 <label>Product Specification</label>
                 <input class="form-control" name="name" type="text" required>
                 
             </div>-->
			 
			 
			 <div class="form-group">
                 <label>Product Category</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Product Name--</option>
					<?php 
					  $sql = "select * from product";
					  $result = mysql_query($sql);
					  while ($row = mysql_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['product']; ?>"><?php echo $row['product']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			 
			
			 
			<!--  <div class="form-group">
                 <label>Image</label>
                 <input type="file"  name="file[]" required>
				 <p>Image Size : 170 x 170</p>
                 
             </div>-->
			 
			 <div class="form-group">
                 <label>Color</label>
                 <input type="file"  name="file2" required>
				 
                 
             </div>
			 
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
