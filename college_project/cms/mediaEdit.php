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
  include '../config/config.php';
  $sql = "select * from media where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
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
		
          <h1 class="page-header">Edit Name</h1>
		  <div class="bredcrum"><a href="media.php">All media</a> &raquo; Edit Page</div>
          <div class="form-group">
          <form action="mediaUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
                 <label>Select Category</label>
                 <select class="form-control" name="product" required>
				 <option value="">Select Category</option>
				 <?php
				 $sql2 = "select * from product";
				 $result2 = mysql_query($sql2);
				 while($row2 = mysql_fetch_array($result2))
				 {
				 ?>
				 
				    
				    <option <?php if($row['product'] == $row2['id'] ) {  ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['product']; ?></option>
					<?php } ?>
				 </select>
			  
			</div>
             <div class="form-group">
                 <label>Image Name</label>
                 <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
             </div>
		  <img src="<?php echo $row['ThumbName']; ?>" width="100" ><br>
         
           
			   
			 
			 <button type="submit" class="btn">Update</button>
		  
         </form>
         
		 
          
		  
        </div>
      </div>
    </div>
	
	<div class="footer">
	   <div class="container">
	    <p>Designed and Developed By <a href="http://stealthmedialtd.co.nz/" target="_blank">Stealth Media Ltd</a></p>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

<?php } ?>
