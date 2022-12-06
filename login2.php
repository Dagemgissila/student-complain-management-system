<?php
    session_start();
    include 'connect.php';
    if(isset($_POST['login'])){
            function validation($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            $username=validation($_POST['username']);
            $password=validation($_POST['password']);
        
              $sql1="SELECT * FROM `studentlogin` WHERE username='$username' AND password='$password'";
          
              $result1=mysqli_query($conn,$sql1);
              
              if(mysqli_num_rows($result1) > 0){
                $row=mysqli_fetch_assoc($result1);
                   $role=$row["role"];
                  $status=$row["status"]; 
                      
                             switch($role)
                              {
                                  case 'admin':
                                    $_SESSION["username"]=$username;
                                      header("location:adminpage.php");
                                      break;
                                  case 'student':
                                    if($status==1){
                                   $_SESSION["username"]=$username;
                                   header("location:password1.php");
                                                 }
                                   elseif($status==2){
                                    echo "<script>alert('your account is restricted !!please contact the faculty');</script>";
                                    echo "<script>window.location.href='login.php';</script>";
                                                     }
                                elseif($status==0){
                                    echo "<script>alert('your account is not active please sign up first');</script>";
                                    echo "<script>window.location.href='login.php';</script>";
                                               }
                                   
                                   break;
                                   default:
                                   echo "unknown user";
                                   break;

                               }
                            
                            
                           

            
            } 

              else {
                 
                  echo "<script>alert('incorrect username or password');</script>";
                  echo "<script>window.location.href='login.php';</script>";
              } 
                  
              

            
            
        
            

    }





?>
  <!--
             
              else if($status==1)
              {
                      
              }
              else{
                  echo "your account is restricted ";
              }

          }
           -->
