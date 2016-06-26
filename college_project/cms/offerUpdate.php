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
	 $model = mysql_real_escape_string ($_POST['model']);
	 
	 $content = mysql_real_escape_string ($_POST['content']);
	 $code = mysql_real_escape_string ($_POST['code']);
	 $show_on_home =  isset($_POST['show_on_home']) && $_POST['show_on_home']  ? "1" : "0";	
	 
	 
	
	 
	$sql = "update offer set product = '$product' , model = '$model', content = '$content' , code = '$code', show_on_home = '$show_on_home' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:offer.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>