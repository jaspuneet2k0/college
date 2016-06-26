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
	 $short_desc = mysql_real_escape_string ($_POST['short_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	 $home = isset($_POST['home']) && $_POST['home']  ? "1" : "0";
	 $s_no = mysql_real_escape_string ($_POST['s_no']);
	$sql = "update team set s_no = '$s_no',  page = '$page' , title = '$title' , keywords = '$keywords' , meta_desc = '$meta_desc', short_desc = '$short_desc', content = '$content', home = '$home' where id = '$id' "; 
  	 
	$result = mysql_query($sql);
	if($result)
	{ 
	   header('location:team.php?id=2');
	} 
	else
	{
	  echo mysql_error();
	}
}

?>