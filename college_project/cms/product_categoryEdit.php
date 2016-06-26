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
  $sql = "select * from product_category where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
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
		
          <h1 class="page-header">Edit Product Category</h1>
		  <div class="bredcrum"><a href="product_category.php">All Product Category</a> &raquo; Edit Product Category</div>
         <form action="product_categoryUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
               
               
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
				    
				   <option <?php if($row['page_id'] == $row2['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['id']; ?>"><?php echo $row2['page']; ?></option>
					<?php } ?>
				 </select>
                 
             </div>
               
               
               
			  <div class="form-group">
                 <label>Product Category</label>
                 <input class="form-control" name="category" value="<?php echo $row['category']; ?>" required>
                 
             </div>
			  
			   <div class="form-group">
                 <label>Title</label>
                 <input class="form-control" name="title" type="text" value="<?php echo $row['title']; ?>" required>
                 
             </div>
			  
			  
			   <div class="form-group">
                 <label>Keywords</label>
                 <input class="form-control" name="keywords" type="text" value="<?php echo $row['keywords']; ?>" required>
                 
             </div>
			  
			   <div class="form-group">
                 <label>Meta Description</label>
                 <input class="form-control" name="meta_desc" type="text" value="<?php echo $row['meta_desc']; ?>" required>
                 
             </div>
			<?php /*?> <?php
			    
			    if($row['ThumbName'] == 'NULL' || $row['ThumbName'] == '' )
				{
			 ?>
			  <div class="form-group">
			     
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=product_category" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/feature/no-image.gif" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 <?php
			 }
			 else
			 {
			 ?>
			
			 <div class="form-group">
			   
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=product_category" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=350,toolbar=1,resizable=0'); return false;"><img src="<?php echo $row['ThumbName']; ?>" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 
			 <?php } ?><?php */?>
			  
			 
			  <div class="form-group">
                 <label>Content</label>
                 <textarea name="content" class="form-control" style="height:220px;"><?php echo $row['content']; ?></textarea>
                 
             </div>
			 
			
			 
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
