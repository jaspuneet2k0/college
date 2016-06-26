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
	 
	  $sql2 = "select * from team where page = '$page'";
	  $result = mysql_query($sql2);
	  $row2 = mysql_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:team.php?id=3');
	  }
	  else
	  {
	    
	  
	 
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $short_desc = mysql_real_escape_string ($_POST['short_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	 $s_no = mysql_real_escape_string ($_POST['s_no']);
	
	 $target_dir = "../images/team/";
	 $target_file = $target_dir . basename($_FILES["img"]["name"]);
	 
	 move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
       
		$img = $_FILES["img"]["name"];
	$home = isset($_POST['home']) && $_POST['home']  ? "1" : "0";
	 
	 $sql = "insert into team (s_no, title, keywords, meta_desc, short_desc,  page, content, img, home) Values ('$s_no', '$title' , '$keywords' , '$meta_desc', '$short_desc', '$page', '$content', '$img', '$home')";
	 
	 $result = mysql_query($sql);
	 
	 if($result)
	 {
	   header('location:team.php?id=1');
	 }
	 else
	 {
	   echo mysql_error();
	 }
	 
	 
	  
  }
  
  }
 ?>