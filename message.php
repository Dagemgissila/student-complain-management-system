<?php
session_start();

// include'checkuser.php';



     $host="localhost";
     $un="root";
     $pw="";
     $dbname="iproject3";
  
     $errors=array();
     $con=mysqli_connect($host,$un,$pw,$dbname);
     if(!$con){
      die("unable to connect db connction...".mysqli_error($con));
   }
   if(isset($_POST['mess'])){
       $username=$_POST['username'];
       $message=$_POST['message'];
       $sql="INSERT INTO  message ( `username`, `message`) VALUES ('$username','$message')";
       $result=mysqli_query($con,$sql);
             if($result){
               
                echo"<script>window.location.href='casereport.php';</script>";
             
             }

   }