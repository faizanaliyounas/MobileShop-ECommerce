<?php

include('connection.php');
//include('accessControl.php');
session_start();
if(!isset($_SESSION['username']))
{
  header('Location:adminlogin.php');
  exit();
} 
   $row_id=$_GET['id'];
   $delete_query="DELETE FROM record where id=".$row_id."";
  
   if($con->query($delete_query))
   {
   	/*delete successfully*/
   
   header('Location: adminmain.php?message="deleted successfully"');
    
   }
   else
   {

     
   header('Location: adminmain.php?message="Some thing went wrong"');
   }

   //header('Location: main.php');
 ?>