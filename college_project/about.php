<?php
  include 'config/config.php';
  $sql = "select * from page where id=2";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
?>
<?php
     include '_head.php';
?>

<style>
   #about
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
					 <div class="col-xs-12 col-sm-7 wel1 wow fadeInLeft animated" data-wow-duration data-wow-delay="0.4s">
						 
						 <?php echo $row['content']; ?>
						 
						 <?php /*?><p>We are professionally managed company established in 1997 with a vision to create worldwide network of sellers and buyers in Textile Industry. We had been able to succeed to provide our esteem clients latest textile machinery. We believe we could make a better future in this business with continuous efforts to provide best services to our buyers.</p>
						 <p>We are agents and indentors of Used Textile Machinery having strong network around the world.</p>
						 
						 <p>We buy and sell all kinds of Textile machinery.</p>
						 
						 <p><strong>Weaving</strong> - Dornier, Sulzer, Nouva Pignone, Picanol, Somet, Toyota, Tsudakoma, Vamatex and SMIT with Cam, Dobby or Jacquard</p>
						 
						 <p><strong>Knitting</strong> - Warp Knitting, Flat Knitting, Circular Knitting, Sock Knitting</p>
						 
						 <p><strong>Spinning</strong> - Rieter, Trutzschler, Schlafhorst, Murata, Crosrol, Toyota</p>
						 
						 <p><strong>Preparation machinery</strong> - Warping, Sizing</p>
						 
						 <p><strong>Dyeing & Finishing</strong> - Stenter, Jigger, Continuous Dyeing, Rope dyeing</p>
						 
						 <p>Sewing Machines, Braiding Machines, Polyester Yarn and Fabrics.</p><?php */?>
						 
						  
						  
						 
					 </div>
					 
					 <div class="col-xs-12 col-sm-5 wel3 wow fadeInRight animated" data-wow-duration data-wow-delay="0.4s">
					  
						<img src="images/abt.jpg">
					   
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
