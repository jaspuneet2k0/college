<?php
  include 'config/config.php';
  $sql = "select * from page where id=5";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>

<style>
   #offers
   {
   	 color:#fff;
     background-color: #29ABE2;
   }
</style>

  <body>
  
  
  <?php include 'header.php' ?>

 
    <!--<div class="message">
	    <div class="container">
		   <div class="col-xs-12 col-sm-12 col-md-12 msg1 center">
		      <h2><span class="alternative_font"> About us </span></h2>
		   </div>
		   
		</div>
		<div class="message-shadow"></div>
	</div>-->
    <div class="banner">
      <div class="container">
        <h1>&nbsp;</h1>
      </div>
    </div>
    <div class="slider-bottom"></div>
    
    <div class="content">
         
	<div class="span-pg">
		    <div class="container">
				
				<div class="col-xs-12">
					<div class="heading center"><h2><?php echo $row['page']; ?></h2><div class="line"></div></div>
				</div>
				
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<?php echo $row['content']; ?>
					</div>
				</div>	
				
				
				
					
			     <div class="row margin-b-20">
				 
				 
				 <div class="gal border margin-t-20">
				   <?php
				      $page = $row['id'];
				      $sql2 = "select * from offer";
					  $result2 = mysql_query($sql2);
					  while($row2 = mysql_fetch_array($result2))
					  {
					     $path = substr($row2['ThumbName'] , 3);
			             $path2 = substr($row2['path'] , 3);
					    ?>
						
						
						<div class="col-sm-2 col-xs-12">
							<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $path2; ?>"><img src="<?php echo $path; ?>"/></a>
						</div>
						
						<div class="col-sm-10 col-xs-12">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<p><strong>Product:</strong> <?php echo $row2['product']; ?></p>
								</div>
								
								<div class="col-sm-6 col-xs-12">
									<p><strong>Model:</strong> <?php echo $row2['model']; ?></p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<?php echo $row2['content']; ?>
								</div>
							</div>
						</div>
						
						<?php
					  }
				   ?>
				</div>
				 
				 
						
				 </div>
				 
				 
				 <div class="row">
				 	<div class="col-sm-12 col-xs-12 text-center margin-t-30">
						<p><a href="enquiry.php" class="read">Enquire Now</a></p>
					</div>
				 </div>
				 
				  
			</div>
		</div>
		
		
		
		
		
		
	
   </div>
   
   <div class="clear"></div>
   <?php include 'footer.php' ?>
    
	 <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
   
  </body>
</html>
