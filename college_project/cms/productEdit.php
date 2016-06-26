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
  $sql = "select * from product where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
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
		
          <h1 class="page-header">Edit product</h1>
		  <div class="bredcrum"><a href="product.php">All Products</a> &raquo; Edit Product</div>
         <form action="productUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
         
         <div class="form-group">
                 <label>Product Category</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Product Category--</option>
					<?php 
					  $sql2 = "select * from product_category";
					  $result2 = mysql_query($sql2);
					  while ($row2 = mysql_fetch_array($result2))
					  {
					?>
					<option <?php if($row['category'] == $row2['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['category']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
           
			  <div class="form-group">
                 <label>Product Name</label>
                 <input class="form-control" name="product" value="<?php echo $row['product']; ?>" required>
                 
             </div>
			 
			 
			  <div class="form-group">
                 <label>Product Tilte</label>
                 <input class="form-control" name="title" value="<?php echo $row['title']; ?>" required >
                 
             </div>
			  <div class="form-group">
                 <label>Meta Keywords</label>
                 <input class="form-control" name="keywords" value="<?php echo $row['keywords']; ?>" >
                 
             </div>
			 
			  <div class="form-group">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" value="<?php echo $row['meta_desc']; ?>">
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
			
			
			<?php 
			     $prod1 = $row['id'];
				 $prod = mysql_real_escape_string($prod1);
				
			    $sql3 = "select * from media where product = '$prod'";
				$result3 = mysql_query($sql3);
				$rows3 = mysql_num_rows($result3);
				
				if($rows3 == 0) 
				{
			?> 
			 
			  <div class="form-group" style="text-align:center;">
                 <a href="media-add.php" class="btn btn-primary">Click here Add Images</a>
             </div>
			 
			 <?php
			 }
			  else
			  {
			  ?>
			  <div class="col-xs-12">
			  <?php
			     while($row4 = mysql_fetch_array($result3))
				 {
			   ?>
			   
			   <div class="col-xs-12 col-sm-6 col-md-2 img001" style="text-align:center;"><img style="margin-bottom:10px;" src="<?php echo $row4['ThumbName']; ?>" /><a href="delete2.php?row=<?php echo $row4['id']; ?>&tbl=media&row2=<?php echo $row['id']; ?>" class="ask"><img src="images/trash.png" title="Delete Image"></a></div>
			   <?php } ?>
			  </div> 
			   <div class="form-group newbtn" style="text-align:center;">
                 <a href="media-add2.php" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="btn btn-primary">Add More Images</a>
             </div>
			   <?php
			  }
			 ?>
			
			 
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
