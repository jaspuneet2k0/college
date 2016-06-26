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
  $sql = "select * from offer where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>

<style>
    #offer
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
		
          <h1 class="page-header">Edit product</h1>
		  <div class="bredcrum"><a href="product.php">All Products</a> &raquo; Edit Product</div>
         <form action="offerUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
         
         
           
			  <div class="form-group">
                 <label>Product Name</label>
                 <input class="form-control" name="product" value="<?php echo $row['product']; ?>" required>
                 
             </div>
			 
			 
			  <div class="form-group">
                 <label>Product Model</label>
                 <input class="form-control" name="model" value="<?php echo $row['model']; ?>" required >
                 
             </div>
			
			 
			
             
			  <?php /*?><div class="form-group">
                 <label>Featured Products (home page)</label>
                 <input type="checkbox"  name="show_on_home" <?php if($row['show_on_home']==1){ ?> checked="checked" <?php } ?>>
                 
             </div><?php */?>
             
			 <?php
			    
			    if($row['ThumbName'] == 'NULL' || $row['ThumbName'] == '' )
				{
			 ?>
			  <div class="form-group">
			     
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=product" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/feature/no-image.gif" width="100" ></a>
				<p>Image Size :Less then 1 MB</p>
			 </div>
			 <?php
			 }
			 else
			 {
			 ?>
			
			 <div class="form-group">
			   
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=product" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=350,toolbar=1,resizable=0'); return false;"><img src="<?php echo $row['ThumbName']; ?>" width="100" ></a>
				<p>Image Size :Less then 1 MB</p>
			 </div>
			 
			 <?php } ?>
			  <div class="form-group">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"><?php echo $row['content']; ?></textarea>
                 
             </div>
			 
			 
			 <!--<div class="form-group">
                 <label>Video Code</label>
                 <input class="form-control" name="code" value="<?php echo $row['code']; ?>">
             </div>-->
			
			
			
			 
			  
			 
			 
			
			 
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
