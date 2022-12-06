<?php
include "connect.php";
   if(isset($_GET["username"]))
   {
        $username=$_GET["username"];
        $sql="select status from studentlogin where username='$username'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $status=$row["status"];
        if($result){
              if($status==1){
            $update=mysqli_query($conn,"UPDATE studentlogin set status=2 where username='$username'");
             echo "<script>window.location.href='managestudent.php';</script>";
              }
              elseif($status==2){
                $update=mysqli_query($conn,"UPDATE studentlogin set status=1 where username='$username'"); 
                echo "<script>window.location.href='managestudent.php';</script>";
              }
              else {
                  echo "<script>alert('unable to restrict/active the stduent ,since not register yet.if you want remove unwanted student use delete operation');</script>";
                  echo "<script>window.location.href='managestudent.php';</script>";
              }
        }
   }
      if (isset($_GET["delete"]))
      {
        $username=$_GET["delete"];
        $sql="DELETE FROM studentlogin WHERE username='$username';";
        $sql.="DELETE FROM studentlist WHERE username='$username';";
        $sql.="DELETE FROM studentcase WHERE username='$username'";
        $result=mysqli_multi_query($conn,$sql); 
        echo "<script>alert('succesfully deleted')</script>";
        echo "<script>window.location.href='managestudent.php';</script>";
        
      }
      

?>