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
     
	 $title = mysql_real_escape_string ($_POST['title']);
	
	 	
	 
	$sql = "update gallery set title = '$title' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:gallery.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>