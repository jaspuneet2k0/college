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
	 $sql = "select * from page LIMIT 10";
	 $result = mysql_query($sql);
	 
   
   ?>
<?php include '_head.php' ?>

<style>
    #home
	{
	 
      background-color: #428bca;
	}
</style>

<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $.getJSON('http://www.highcharts.com/samples/data/jsonp.php?filename=aapl-c.json&callback=?', function (data) {

        // Create the chart
        $('#container').highcharts('StockChart', {


            rangeSelector : {
                inputEnabled: $('#container').width() > 480,
                selected : 1
            },

            title : {
                text : 'Vistors'
            },

            scrollbar : {
                enabled : false
            },

            series : [{
                name : 'Vistors',
                data : data,
                tooltip: {
                    valueDecimals: 2
                }
            }]
        });
    });
});

		</script>
		
		<script src="js/charts/highstock.js"></script>
<script src="js/charts/modules/exporting.js"></script>

  <body>

    <?php include 'header.php' ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'sidebar.php' ?>
        <div class="col-sm-9  col-md-10  main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
           
            <div class="col-xs-6 col-sm-9 col-md-8 placeholder">
              <div id="container"></div>
			  
            </div>
            <div class="col-xs-6 col-md-4">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock"><div class="jclock" align="center"></div></div>                            
                                <div class="widget-subtitle plugin-date"><div id="Date"></div></div>
                                                           
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
          </div>

          <h2 class="sub-header">All Pages</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
			  
			  
                <tr>
                  
                  <th>Page Name</th>
                  <th>Page Title</th>
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
                  
                  <td><?php echo $row['page']; ?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><a href="pageEdit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a href="delete.php?row=<?php echo $row['id']; ?>&tbl=page" class="ask"><img src="images/trash.png"></a></td>
                </tr>
				
	  <?php } ?>			
               
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
	
	<?php include 'footer.php' ?>
  </body>
</html>
<?php } ?>
