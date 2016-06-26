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
	  $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $page = mysql_real_escape_string ($_POST['page']);	
	 
	$sql = "update product_category set category = '$category' , title = '$title', keywords = '$keywords', meta_desc = '$meta_desc', content = '$content' , page_id = '$page' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:product_category.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>