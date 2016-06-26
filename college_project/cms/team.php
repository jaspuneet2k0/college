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
	 $sql = "select * from team order by s_no";
	 $result = mysql_query($sql);
	 
   
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
			   <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       Team Updated.
               </div>
							
		<?php } ?>
		
		<?php 
		    if($id == 3)
			{
			   ?>
			   <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Team Name Already Exists.
               </div>
							
		<?php } ?>
         
          <h2 class="sub-header">All Teams</h2><div class="newpage"><a href="teamadd.php">Add Team</a></div>
		  
		  <div id="first-container">    
          <div class="table-responsive">
            <table class="table table-striped" id="rounded-corner">
              <thead>
			  
			  
                <tr>
                  <th>Serial Number</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Edit </th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
			  
			  <?php
			      while($row = mysql_fetch_array($result))
				  {
			  ?>
                <tr>
                  <td><?php echo $row['s_no']; ?></td>
                  <td><?php echo $row['page']; ?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><a href="teamEdit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a href="delete.php?row=<?php echo $row['id']; ?>&tbl=team" class="ask"><img src="images/trash.png"></a></td>
                </tr>
				
	  <?php } ?>			
               
               
              </tbody>
            </table>
          </div>
        
		<div class="my-navigation">
			<div class="simple-pagination-first page-btn"></div>
			<div class="simple-pagination-previous page-btn"></div>
			<div class="simple-pagination-page-numbers page-btn"></div>
			<div class="simple-pagination-next page-btn"></div>
			<div class="simple-pagination-last page-btn"></div>
	</div>
	<div class="simple-pagination-page-x-of-x"></div>
	<div class="simple-pagination-showing-x-of-x"></div>


<div class="page-display">
		Display <select class="simple-pagination-items-per-page"></select> items per page.
	</div >
	<div class="page-display">
		Go directly to page <select class="simple-pagination-select-specific-page"></select>.
	</div>
</div>
 <script src="js/jquery-simple-pagination-plugin.js"></script>

<script>
(function($){

$('#first-container').simplePagination({
     items_per_page: 20
});

})(jQuery);
</script>
	
</div>	
		
      </div>
    </div>
	
	<?php include 'footer.php' ?>
  </body>
</html>
<?php } ?>
