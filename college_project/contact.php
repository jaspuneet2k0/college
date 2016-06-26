<?php
  include 'config/config.php';
  $sql = "select * from page where id= 8";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>

<style>
   #contact
   {
    color:#fff;
     background-color: #29ABE2;
   }
</style>

  <body>
  
  
  <?php include 'header.php' ?>

 <div class="banner">
      <div class="container">
        <h1>&nbsp;</h1>
      </div>
    </div>
    <div class="slider-bottom"></div>
   
    <div class="content">
         
		 
		
		
		<div class="span-pg">
		    <div class="container">
				
				<div class="col-sm-12 col-xs-12">
					<div class="heading center"><h2><?php echo $row['page'];?></h2><div class="line"></div></div>
				</div>
			
			     <div class="col-xs-12 col-sm-6 wel1 wow fadeInLeft animated" data-wow-duration data-wow-delay="0.4s">
				     
					 <div class="col-xs-12 col-sm-12 address">
					 <h4><strong>Contact</strong> Address</h4>
                        <p><i class="fa fa-map-marker"></i> <strong>G.R. Textiles</strong>, Bal Kalan Industrial Area, Majitha Road, Amritsar, India</p>
                        <p><i class="fa fa-tablet"></i> <a href="tel:+919815199879">+91 98151 99879</a>, &nbsp; <a href="tel:+919501999879">+91 95019 99879</a></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:info@grtextiles.com">info@grtextiles.com</a></p>
                        <div class="map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6788.188618039164!2d74.90768192382792!3d31.713318702149788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391963d054d9e83b%3A0xde274b454078322d!2sBal+Kalan%2C+Punjab+143601!5e0!3m2!1sen!2sin!4v1451994611965"  frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                     </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 wel2 wow fadeInRight animated" data-wow-duration data-wow-delay="0.4s">
				  <h4><strong>Contact</strong> Form</h4>
				    <div class="quick">
				      <form action="query-contact.php" method="post" onSubmit="return validations()" name="reg" id="formID" class="formular">
					      <div class="form-group">	
						   <div class="col-sm-6 pdl0">
							   <input type="text" class="form-control validate[required]" placeholder="First Name*" name="name" required=""> 
						   </div>
						   
						   
						    <div class="col-sm-6 pdr0">
							   <input type="text" class="form-control validate[required]" placeholder="Last Name*" name="lname" required=""> 
						   </div>
						</div>
						
						<div class="form-group">	
						   <div class="col-sm-6 pdl0">
							   <input type="text" class="form-control validate[required, custom[email]], textbox" placeholder="Email Address*" name="email" required=""> 
						   </div>
						   
						    <div class="col-sm-6 pdr0">
							   <input type="text" class="form-control validate[required]" placeholder="Phone*" name="phone" required=""> 
						   </div>
						</div>
						<div class="form-group">
						<textarea class="form-control" placeholder="Message" name="msg" style="height:130px;"></textarea>
						</div>
						<div class="form-group" style="margin-bottom:0;">
						   <input type="submit" class="btn" value="Submit">
						</div>
					  </form>
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
