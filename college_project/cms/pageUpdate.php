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
     $page = mysql_real_escape_string ($_POST['page']);
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	 	
	 
	$sql = "update page set page = '$page' , title = '$title' , keywords = '$keywords' , meta_desc = '$meta_desc', content = '$content' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:page.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>