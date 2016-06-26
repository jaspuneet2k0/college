<?php
  session_start();
if(!isset($_SESSION['user']))
{
   header('location:index.php');
}
$id = $_GET['row'];
$table = $_GET['tbl'];
include ('../config/config.php');

 
  $sql = "delete from ".$table." where id= '".$id."'";
  
  $result = mysql_query($sql);
  if($result)
  {
	  header('location:'.$table.'.php');
  }
  else
  {
    echo mysql_error();
	
  }	 
?>
