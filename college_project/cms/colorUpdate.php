<?php
include '../config/config.php';
ob_start();

$id = $_GET['row'];
$table = $_GET['tbl'];
?><noscript>
<div align="center"><a href="index.php">Go Back To Upload Form</a></div><!-- If javascript is disabled -->
</noscript>

<?php
     $target_dir = "../images/color/";
	 $target_file = $target_dir . basename($_FILES["file2"]["name"]);
	 
	 move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file);
       
		$color = $_FILES["file2"]["name"];
       $sql = "update ".$table." set color = '$color'  where id = '$id'";
	   mysql_query($sql);
					
					 echo "<script>window.close();</script>";
?>


