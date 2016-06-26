<?php
session_start();
            $user = $_REQUEST['user'];
			$pass = $_REQUEST['pass'];
			
			
			$myuser = 'grtextiles';
			$mypass = 'grtextiles12345';
			
			if($user==$myuser && $pass==$mypass)
			{ 
			   $_SESSION['user']=$user;
			   header('location:home.php');
			   
			}
			else
			{
			   header('location:index.php?id=1');
			//  echo "error";
			}
			

?>