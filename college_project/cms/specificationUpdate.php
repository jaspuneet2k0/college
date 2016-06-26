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
     
	 $category = mysql_real_escape_string ($_POST['category']);
	
	 $content = mysql_real_escape_string ($_POST['content']);
	 
	 
	$sql = "update specification set category = '$category' , content = '$content' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:specification.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>