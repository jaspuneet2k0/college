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
	 
	  $sql2 = "select * from products where page = '$page'";
	  $result = mysql_query($sql2);
	  $row2 = mysql_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:products.php?id=3');
	  }
	  else
	  {
	    
	  
	 $category = mysql_real_escape_string ($_POST['category']);
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	 $short_desc = mysql_real_escape_string ($_POST['short_desc']);
	 $content = mysql_real_escape_string ($_POST['content']);
	 $s_no = mysql_real_escape_string ($_POST['s_no']);
	 $price = mysql_real_escape_string ($_POST['price']);
	
	 $target_dir = "../images/products/";
	 $target_file = $target_dir . basename($_FILES["img"]["name"]);
	 
	 move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
       
		$img = $_FILES["img"]["name"];
	$home = isset($_POST['home']) && $_POST['home']  ? "1" : "0";
	 
	 $sql = "insert into products (s_no, title, category, keywords, meta_desc, short_desc, page, content, img, home, price) Values ('$s_no', '$title' , '$category' , '$keywords' , '$meta_desc', '$short_desc', '$page', '$content', '$img', '$home', '$price')";
	 
	 $result = mysql_query($sql);
	 
	 if($result)
	 {
	   header('location:products.php?id=1');
	 }
	 else
	 {
	   echo mysql_error();
	 }
	 
	 
	  
  }
  
  }
 ?>