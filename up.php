<?php 
session_start();
include 'connect.php';
 
  if(isset($_POST['save']))
     {
    $_SESSION['username'];
      $oldp=$_POST['op'];
      $newp=$_POST['np'];
      $newcp=$_POST['cp'];
      $sql=(" SELECT * FROM studentlogin WHERE username='". $_SESSION['username']."' ");
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result)){
       
      if($row['password']==$oldp)

      {
        $query="UPDATE studentlogin set status=1  where username='". $_SESSION['username']."'";
              
        $b=mysqli_query($conn,$query);
          mysqli_query($conn,"UPDATE studentlogin  set password='".$newp."' WHERE username='".$_SESSION['username']."'");
 
          
  
          
          echo"<script>window.location.href='password1.php';</script>";
      }
      else{
      
          echo "<script>alert('password is incorrect');</script>";
          echo"<script>window.location.href='updatepassword.php';</script>";
      }
    }
  }

?>