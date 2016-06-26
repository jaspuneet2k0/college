<div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand" href="index.php">
			    <img src="images/logo.png" style="width:153px" />
			</a>
           
          </div>
          <div class="navbar-collapse collapse">
		  
		  <script>
		  	$(function(){
				$(".dropdown-menu > li > a.trigger").on("click",function(e){
					var current=$(this).next();
					var grandparent=$(this).parent().parent();
					if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
						$(this).toggleClass('right-caret left-caret');
					grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
					grandparent.find(".sub-menu:visible").not(current).hide();
					current.toggle();
					e.stopPropagation();
				});
				$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
					var root=$(this).closest('.dropdown');
					root.find('.left-caret').toggleClass('right-caret left-caret');
					root.find('.sub-menu:visible').hide();
				});
			});
		  </script>
		  
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php" id="home">Home</a></li>
			 <li><a href="about.php" id="about">About us</a></li>
			 
			 <li><a href="sell-machine.php" id="sell">Sell Machinery</a></li>
              
             
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="buy">Buy Machinery <span class="caret"> </span></a>
                <ul class="dropdown-menu" role="menu">
                	
					<li>
						<a class="trigger right-caret" data-toggle="dropdown" href="#">Knitting Machines</a>
                    	<ul class="dropdown-menu sub-menu">
                    		<li><a href="machine.php?id=1">Circular Knitting</a></li>
                        	<li><a href="machine.php?id=2">Flat Knitting</a></li>
                        	<li><a href="machine.php?id=3">Socks Knitting</a></li>
                        	<li><a href="machine.php?id=4">Warp Knitting</a></li>
                    	</ul>
                	</li>
				
				  <li><a class="trigger right-caret" data-toggle="dropdown" href="#">Weaving Machines</a>
                    	<ul class="dropdown-menu sub-menu">
                    		<li><a href="machine.php?id=5">Air Jet Weaving</a></li>
                        	<li><a href="machine.php?id=6">Rapier Weaving</a></li>
                        	<li><a href="machine.php?id=7">Projectile Weaving</a></li>
                        	<li><a href="machine.php?id=8">Narrow Weaving</a></li>
                    	</ul>
                	</li>
					
					<li><a class="trigger right-caret" data-toggle="dropdown" href="#">Dying & Printing</a>
                    	<ul class="dropdown-menu sub-menu">
                    		<li><a href="machine.php?id=9">Rotary Printing</a></li>
                        	<li><a href="machine.php?id=10">Digital Printing</a></li>
                    	</ul>
                	</li>
					
					<li><a class="trigger right-caret" data-toggle="dropdown" href="#">Spinning Machines</a>
                    	<ul class="dropdown-menu sub-menu">
                    		<li><a href="machine.php?id=11">Auto Coner</a></li>
                        	<li><a href="machine.php?id=12">Blow Room</a></li>
                        	<li><a href="machine.php?id=13">Texturizing</a></li>
                    	</ul>
                	</li>				
				 	
					<li><a href="machine.php?id=14">Polyester Yarn & Fabric</a></li>
					<li><a href="custom-requirement.php">Custom Requirement</a></li>
                </ul>
              </li>
			  <li><a href="offers.php" id="offers">Current Offers</a></li>
              <li><a href="contact.php" id="contact">Contact us</a></li> 
			  
			 
			
			  
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"> </span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                 
                </ul>
              </li>-->
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>