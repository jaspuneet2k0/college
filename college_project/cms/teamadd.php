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
<?php include '_head.php' ?>
<style>
    #team
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
                       Team Successfully Added.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 2)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Team Name Already Exists.
               </div>
							
		<?php } ?>
          <h1 class="page-header">Add new Team</h1>
		   
         <form action="teamaddscript.php" method="post" role="form" enctype="multipart/form-data">
              
              
               <div class="form-group">
                 <label>Serial Number</label>
                 <input class="form-control" name="s_no" type="text" required>
                 
             </div>
             
             
			  <div class="form-group">
                 <label> Name</label>
                 <input class="form-control" name="page" type="text" required>
                 
             </div>
			  <div class="form-group">
                 <label>Tilte</label>
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
             
             
              <div class="form-group">
                 <label>Short Description</label>
                 <input class="form-control" name="short_desc" type="text">
                 
             </div>
             
             <div class="form-group">
                 <label>Image*</label>
                 <input type="file" name="img" required>
                <p>Image Size: 300 x 400</p> 
             </div>
             
             <!--<div class="form-group">
                 <label>Show On Home Page</label>
                 <input type="checkbox" name="home">
                 
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
