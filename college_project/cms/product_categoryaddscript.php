<?php
    session_start();
 if(!isset($_SESSION['user']))
 {
   header('location:index.php');
  
 }
  else
  {
     
     include '../config/config.php';
	 
	
	 
     $category = mysql_real_escape_string ($_POST['category']);
	 
	  $sql2 = "select * from product_category where category = '$category'";
	  $result = mysql_query($sql2);
	  $row2 = mysql_num_rows($result);
	  if($row2 != 0)
	  {
	    header('location:product_category.php?id=3');
	  }
	  else
	  {
	    
	  
	 
	 $content = mysql_real_escape_string ($_POST['content']);
	 $title = mysql_real_escape_string ($_POST['title']);
	 $keywords = mysql_real_escape_string ($_POST['keywords']);
	 $meta_desc = mysql_real_escape_string ($_POST['meta_desc']);
	
	 
	$page = mysql_real_escape_string ($_POST['page']);
	 
	  $sql = "insert into product_category (category, title, keywords, meta_desc, content, page_id) Values ('$category', '$title', '$keywords' , '$meta_desc', '$content', '$page')";
					mysql_query($sql);
					
					
	 
	 if($result)
	 {
	   header('location:product_category.php?id=1');
	 }
	 else
	 {
	   echo mysql_error();
	 }
	 
	 
	  
  }
  
  }
 ?>