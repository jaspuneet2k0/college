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
  $sql = "select * from specification where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
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
		
          <h1 class="page-header">Edit Product Specification</h1>
		  <div class="bredcrum"><a href="specification.php">All Product Specification</a> &raquo; Edit Product Specification</div>
         <form action="specificationUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  
			  
			   <div class="form-group">
                 <label>Product Specification</label>
                 <select name="category" required class="form-control" >
				    <option value="">--Select Product--</option>
					<?php 
					  $sql2 = "select * from product";
					  $result2 = mysql_query($sql2);
					  while ($row2 = mysql_fetch_array($result2))
					  {
					?>
					<option <?php if($row['category'] == $row2['product']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['product']; ?>"><?php echo $row2['product']; ?></option>
					
					<?php } ?>
				 </select>
                 
             </div>
			 <?php /*?><?php
			    
			    if($row['ThumbName'] == 'NULL' || $row['ThumbName'] == '' )
				{
			 ?>
			  <div class="form-group">
			     
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/feature/no-image.gif" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 <?php
			 }
			 else
			 {
			 ?>
			
			 <div class="form-group">
			   
			    <a href="imgEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=350,toolbar=1,resizable=0'); return false;"><img src="<?php echo $row['ThumbName']; ?>" width="100" ></a>
				<p>Image Size : 170 x 170</p>
			 </div>
			 
			 <?php } ?><?php */?>
			 
			  <div class="form-group">
                 <label>Color :</label>
                 <a href="colorEdit.php?id=<?php echo $row['id']; ?>&tbl=specification" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;"><img src="../images/color/<?php echo $row['color']; ?>" ></a>
				 
                 
             </div>
			  
			 
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
