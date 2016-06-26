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
  $sql = "select * from page where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
   ?>
<?php include '_head.php' ?>
<style>
    #page
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
		
          <h1 class="page-header">Edit Page</h1>
		  <div class="bredcrum"><a href="page.php">All Pages</a> &raquo; Edit Page</div>
         <form action="pageUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
           
			  <div class="form-group">
                 <label>Page Name</label>
                 <input class="form-control" name="page" value="<?php echo $row['page']; ?>" required>
                 
             </div>
			  <div class="form-group">
                 <label>Page Tilte</label>
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
