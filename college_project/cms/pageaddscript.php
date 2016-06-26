<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../config/config.php';
	 
	
	 
     $page = mysql_real_escape_string ($_POST['page']);
	 
	  $sql2 = "select * from page where page = '$page'";
	  $result = mysql_query($sql2);
	  $row2 = mysql_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:page.php?id=3');
	  }
	  else
	  {
	    
	  
	 
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	
	 
	
	 
	 $sql = "insert into page (title, keywords, meta_desc,  page, content ) Values ('$title' , '$keywords' , '$meta_desc', '$page', '$content')";
	 
	 $result = mysql_query($sql);
	 
	 if($result)
	 {
	   header('location:page.php?id=1');
	 }
	 else
	 {
	   echo mysql_error();
	 }
	 
	 
	  
  }
  
  }
 ?>