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
	 $category = mysql_real_escape_string ($_POST['category']);
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	 $code = mysql_real_escape_string ($_POST['code']);
	 $show_on_home =  isset($_POST['show_on_home']) && $_POST['show_on_home']  ? "1" : "0";	
	 
	 
	
	 
	$sql = "update product set product = '$product' , category = '$category', title = '$title' , keywords = '$keywords' , meta_desc = '$meta_desc', content = '$content' , code = '$code', show_on_home = '$show_on_home' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:product.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>