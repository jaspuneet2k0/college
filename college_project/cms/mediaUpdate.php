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
     
	 $product = mysql_real_escape_string ($_POST['product']);
	 $name = mysql_real_escape_string ($_POST['name']);
	
	 	
	 
	$sql = "update media set product = '$product', name = '$name' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:media.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>