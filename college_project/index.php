<?php
  include 'config/config.php';
  $sql = "select * from page where id=1";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>
<style>
   #home
   {
    color: #fff;
     background-color: #29ABE2;
   }
</style>
  <body>
  
  
  <?php include 'header.php' ?>

 <?php include 'slider.php' ?>
 
    <div class="message">
	    <div class="container">
		   <div class="col-xs-12 col-sm-7 col-md-10 msg1 center">
		      <h2>We are Leading Importer / Exporter of New and Used Machinery.</h2>
		   </div>
		   <div class="col-xs-12 col-sm-5 col-md-2 msg2 text-center">
		       <a href="enquiry.php" class="read">Enquire Now</a>
		   </div>
		</div>
		<div class="message-shadow"></div>
	</div>
    <div class="content">
         <div class="container">
		
		<div class="main"> 
           <div class="center heading"><h2>Welcome To G.R. Textile</h2>
            <div class="line"></div>
             <p>We are professionally managed company established in 1997 with a vision to create worldwide network of sellers and buyers in Textile Industry. We are agents and indentors of Used Textile Machinery having strong network around the world.</p>
			 
			 
             
             <a href="about.php" class="read">Read More</a>
           </div>
		 </div> 
		 
		 </div>
		 
		 <div class="parallex">
		 <div class="overlay2">
		 
		 <div class="container">
		      <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft animated  center box2" data-wow-duration data-wow-delay="0.2s">
			 
			     <i class="fa fa-6x fa-bar-chart-o"></i>
				  <h3>Results Driven</h3>
				  <?php /*?><p>Sed ut perspiciatis unde om nis natus error sit volup atem accusant  dolorem que laudantium. Totam aperiam, eaque ipsa quae ai. </p><?php */?>
			 </div>
			 
			 
			 <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft animated center box2" data-wow-duration data-wow-delay="0.2s">
			 
			     <i class="fa fa-6x fa-road"></i>
				  <h3>Proven Technology</h3>
				  <?php /*?><p>Sed ut perspiciatis unde om nis natus error sit volup atem accusant dolorem que laudantium. Totam aperiam, eaque ipsa quae ai.</p><?php */?>
			 </div>
			 <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight animated center box2" data-wow-duration data-wow-delay="0.2s">
			 
			     <i class="fa fa-6x fa-flag-checkered"></i>
				  <h3>Winning Culture</h3>
				  <?php /*?><p>Sed ut perspiciatis unde om nis natus error sit volup atem accusant  dolorem que laudantium. Totam aperiam, eaque ipsa quae ai. </p><?php */?>
			 </div>
			 <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight animated center box2" data-wow-duration data-wow-delay="0.2s">
			 
			     <i class="fa fa-6x fa-dashboard"></i>
				  <h3>Top Performance</h3>
				  <?php /*?><p>Sed ut perspiciatis unde om nis natus error sit volup atem accusant  dolorem que laudantium. Totam aperiam, eaque ipsa quae ai. </p><?php */?>
			 </div>
		 </div>
		</div> 
		</div>
		
		
		
		
		
		<div class="container">
        <div class="main">
           <div class="center heading"><h2>Quick Query</h2>
            <div class="line"></div>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 wel2">
				 
				  
				      <form action="query-home.php" method="post" onSubmit="return validations()" name="reg" id="formID" class="formular">
				        <div class="col-xs-12 col-sm-4 pd15">
							<p>Name*</p>
                            <div class="input">
                            <i class="icon-append icon-user fa fa-user"></i>
							<input type="text" name="name" class="form-control cont validate[required]" id="form-validation-field-1">
                            </div>
						</div> 
						
							 <div class="col-xs-12 col-sm-4 pd15">
							<p>Telephone*  </p>
                            <div class="input">
                            <i class="icon-append icon-user fa fa-phone"></i>
							<input type="text" name="phone" class="form-control cont validate[required]" id="form-validation-field-2">
                            </div>
						    </div>
							
						<div class="col-xs-12 col-sm-4 pd15">
                        
							<p>Email Address*</p>  
                            <div class="input">
                            <i class="icon-append icon-user fa fa-envelope"></i>
							<input type="text" name="email" class="form-control cont validate[required, custom[email]], textbox" id="form-validation-field-3">
                            </div>
						  </div>
                          
                          
                        
						  <div class="col-xs-12 col-sm-12 pd15">
						  <p>Message :</p>
                          <div class="input">
                            <i class="icon-append icon-user fa fa-comment"></i>
						 <textarea name="msg" class="form-control cont" style="height:130px; resize:none;"></textarea>
                         </div>
						 </div> 
						 
						 
						 
							<div class="col-xs-12 pd15 text-center"><input type="submit" class="sub" name="submit" value="Submit"></div>
						  
						  
				  

				</form>
				 
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
