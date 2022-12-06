<?php
 session_start();
   require 'connect.php';
   if(isset($_POST["submit"])){
       $username=$_POST["username"];
       $password=$_POST["secretkey"];
       $sql="SELECT * FROM studentlogin where status=0";
       $a=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($a)){
           $dbusername=$row["username"];
           $dbpassword=$row["password"];
           if($dbusername==$username && $dbpassword==$password)
           {
            
               
            
                $_SESSION['username']=$username;
                   header('location:updatepassword.php');
               
           }

           else{
           echo "<script>alert('incorrect username or passowrd');</script>";
           echo "<script>window.location.href='signup.php';</script>";
           }
       }

   }



?>