<?php
session_start();

  require 'connect.php';
  

        if(isset($_POST['submit']))
        {
              $message=$_POST["subject"];
              $username1=$_SESSION["username"];
              $title=$_POST["casetitle"];
              $query="SELECT * FROM studentlist";
              $abc=mysqli_query($conn,$query);

              while($row=mysqli_fetch_assoc($abc))
              {
                   $fullname=$row["fullname"];
                   $username=$row["username"];
               $department=$row["department"];
                    if($username==$username1){
                            $sql="INSERT INTO studentcase(fullname,username,department,title,cases)
                             VALUES('$fullname','$username','$department','$title','$message')";
                            
                             $result=mysqli_query($conn,$sql);
                             if($result)
                             {
                                 
                                 echo"<script>window.location.href='password1.php';</script>";
                             }
                    }
                    else{
                         echo "something is wrong in the program";
                    }

              }


             
        }//isset brace




?>