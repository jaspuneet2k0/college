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
    #product
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
                       Product Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Product Name Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add new Product</h1>
		   
         <form action="productaddscript.php" method="post" role="form" enctype="multipart/form-data">
         
         <div class="form-group">
                 <label>Product Category</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Product Category--</option>
					<?php 
					  $sql = "select * from product_category";
					  $result = mysql_query($sql);
					  while ($row = mysql_fetch_array($result))
					  {
					?>
					<option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
             
           
			  <div class="form-group">
                 <label>Product Name</label>
                 <input class="form-control" name="product" type="text" required>
                 
             </div>
			 
			  
			 
			  <div class="form-group">
                 <label>Product Tilte</label>
                 <input class="form-control" name="title" type="text" required>
                 
             </div>
			  <div class="form-group">
                 <label>Meta Keywords</label>
                 <input class="form-control" name="keywords" type="text">
                 
             </div>
			 
			  <div class="form-group">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text">
                 
             </div>
             
             
             
             
			 <?php /*?><div class="form-group">
                 <label>Featured Products (home page)</label>
                 <input type="checkbox"  name="show_on_home">
                 
             </div><?php */?>
             
             
			 
			 <div class="form-group">
                 <label>Featured Image</label>
                 <input type="file"  name="file[]" required>
				 <p>Image Size : Less then 1 MB</p>
                 
             </div>
			 
			 
			 <div class="form-group">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"></textarea>
                 
             </div>
			 
			  <!--<div class="form-group">
                 <label>Product Image1</label>
                 <input type="file" name="img1">
                 
             </div>
			 
			 
			 <div class="form-group">
                 <label>Product Image2</label>
                 <input type="file" name="img2">
                 
             </div>
			 
			 
			 <div class="form-group">
                 <label>Product Image3</label>
                 <input type="file" name="img3">
                 
             </div>
			 
			 
			 <div class="form-group">
                 <label>Product Image4</label>
                 <input type="file" name="img4">
                 
             </div>
			 
			 
			 <div class="form-group">
                 <label>Product Image5</label>
                 <input type="file" name="img5">
                 
             </div>-->
			 
			 <!-- <div class="form-group">
                 <label>Video Code</label>
                 <input class="form-control" name="code" type="text">
                 
             </div>-->
			 
			 
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
