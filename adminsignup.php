<?php
   require 'connect.php';
     
      if(isset($_POST['submit'])){
          function validation($data){
              $data=trim($data);
              $data=stripslashes($data);
              $data=htmlspecialchars($data);
              return $data;

          }
          $username=validation($_POST['username']);
          $password=validation($_POST['password']);
          $cpassword=validation($_POST['confirmpassword']);
          $sql="SELECT * FROM studentlogin";
          $result=mysqli_query($conn,$sql);
          
          if($password==$cpassword){
           
            $abc="INSERT INTO studentlogin(username,password,role,status) VALUES('$username','$password','admin',1)";
            $query=mysqli_query($conn,$abc);
            header('location:homepage.php');

          }
          else{
              echo "<script>alert('password and confirmation password must be equal');</script>";
        
            echo "<script>window.location.href='index.php';</script>";
          }


      }



?>