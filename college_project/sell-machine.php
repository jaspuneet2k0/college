<?php
  include 'config/config.php';
  $sql = "select * from page where id=3";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>

<style>
   #sell
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
				
				<div class="row wel1 wow fadeInUp animated" data-wow-duration data-wow-delay="0.4s">
					<div class="col-sm-12 col-xs-12">
						<?php echo $row['content']; ?>
					</div>
					
				
				<form action="query-sell.php" method="post" onSubmit="return validations()" name="reg" id="formID" class="formular">
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
						  
						  
						  
						  <div class="col-xs-12 col-sm-4 pd15">
                        
							<p>Machine Type</p>  
                            <div class="input">
                            <i class="icon-append icon-user fa fa-cogs"></i>
							<input type="text" name="type" placeholder="" class="form-control cont">
                            </div>
						  </div>
						  
						  <div class="col-xs-12 col-sm-4 pd15">
                        
							<p>Model</p>  
                            <div class="input">
                            <i class="icon-append icon-user fa fa-cogs"></i>
							<input type="text" name="model" placeholder="" class="form-control cont">
                            </div>
						  </div>
						  
						  <div class="col-xs-12 col-sm-4 pd15">
                        
							<p>Your Address</p>  
                            <div class="input">
                            <i class="icon-append icon-user fa fa-map-marker"></i>
							<input type="text" name="address" placeholder="" class="form-control cont">
                            </div>
						  </div>
                          
                          
                        
						  <div class="col-xs-12 col-sm-12 pd15">
						  <p>Message:</p>
                          <div class="input">
                            <i class="icon-append icon-user fa fa-comment"></i>
						 <textarea name="msg" class="form-control cont" style="height:130px; resize:none;"></textarea>
                         </div>
						 </div> 
						 
						 
						 
							<div class="col-xs-12 pd15"><input type="submit" class="sub" name="submit" value="Submit"></div>
						  
						  
				  

				</form>
				 
				  
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
