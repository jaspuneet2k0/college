<?php
  include 'config/config.php';
  $sql = "select * from page where id=9";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>

<style>
   #home
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
					<div class="heading center"><h2>Privacy Policy</h2><div class="line"></div></div>
				</div>	
					
			     <div class="col-xs-12 col-sm-12 wow fadeInLeft animated" data-wow-duration data-wow-delay="0.4s">
				     
					
					 
					 <p>G.R. Textiles has created this privacy statement in order to demonstrate our strong commitment to your privacy policy. This information is used to enable us to keep in touch with our customers.</p>

					<p>The information is collected for the purpose of contacting our customers; other purposes of collection include the creation of a record on our database, corresponding with you.</p>

					<p>If you have any questions about this privacy statement, the practices of this site or your dealings with us please contact G.R. Textiles</p>
					 
                      
                      
                     
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
