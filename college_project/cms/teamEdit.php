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
  $sql = "select * from team where id = '$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result); 
   
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
		
          <h1 class="page-header">Edit Team</h1>
		  <div class="bredcrum"><a href="team.php">All Teams</a> &raquo; Edit Team</div>
         <form action="teamUpdate.php?id=<?php echo $row['id']; ?>" method="post" role="form">
              
               <div class="form-group">
                 <label>Serial Number</label>
                 <input class="form-control" name="s_no" value="<?php echo $row['s_no']; ?>" required>
                 
             </div>
              
			  <div class="form-group">
                 <label> Name</label>
                 <input class="form-control" name="page" value="<?php echo $row['page']; ?>" required>
                 
             </div>
			  <div class="form-group">
                 <label> Tilte</label>
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
                 <label>Short Description</label>
                 <input class="form-control" name="short_desc" value="<?php echo $row['short_desc']; ?>">
             </div>
             
             
              <div class="form-group">
                 <p> Image* :</p>
                 <a href="imgEdit2.php?id=<?php echo $row['id']; ?>&tbl=team&page=team" onClick="window.open(this.href, '#',
'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
<?php 
  if($row['img']=="")
  {
     
?>

  <img src="../images/team/placeholder.png" width="100">

<?php }
 else
 {

 ?>
<img src="../images/team/<?php echo $row['img']; ?>" width="100">
<?php } ?>


</a>

			<p>Images size : 300 x 400</p>	 
                 
             </div>
             
             
             <?php /*?><div class="form-group">
                 <label>Show On Home Page</label>
                 <input type="checkbox" name="home" <?php if($row['home'] == '1'){ ?> checked <?php } ?>>
                 
             </div><?php */?>
			 
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
	    <p>Design and Developed By <a href="http://stealthmedialtd.co.nz/" target="_blank">Stealth Media Ltd</a></p>
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
