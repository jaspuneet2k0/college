<?php
include '../config/config.php';
ob_start();
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
   
    $category = mysql_real_escape_string ($_POST['category']);
	 
	 
     $content = mysql_real_escape_string ($_POST['content']);
	$target_dir = "../images/color/";
	 $target_file = $target_dir . basename($_FILES["file2"]["name"]);
	 
	 move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
       
		$color = $_FILES["file2"]["name"];
	   
	 $sql = "insert into specification (category, content, color) Values ('$category', '$content', '$color')";
					$result = mysql_query($sql);
				
				if($result)
				{	
					header('location:specification.php?id=1');
				}
				else
				{
				    echo mysql_error();
				}
   ?>
  
