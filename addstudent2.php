 <?php

include 'connect.php';
   if(isset($_POST["submit2"]))
   {
       $fullname=$_POST["fullname"];
       $username=$_POST["username"];
       $department=$_POST["department"];
       $gender=$_POST["gender"];
       $batch=$_POST["batch"];
       $str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPKRSTUVWXYZ123456789";
       $str=str_shuffle($str);
       $str=substr($str,0,6);
       $query1="INSERT INTO studentlist(fullname,username,gender,department,batch) 
       VALUES ('$fullname','$username','$gender','$department','$batch') ";
        $run=mysqli_query($conn,$query1);
         $query="INSERT INTO studentlogin(username,password) 
         VALUES ('$username','$str') ";

       $run=mysqli_multi_query($conn,$query);
       if($run){
        
        echo "<script>window.location.href='addstudent.php';</script>";
    }
    else{
        echo "not uploaded";
    }


   }
 
   //  this is for excel file
if(isset($_POST["submit"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
    $str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPKRSTUVWXYZ123456789";
        $str=str_shuffle($str);
         $str=substr($str,0,6);
         $fullname = $csv[0];
         $username = $csv[1];
         $gender = $csv[2];
         $department=$csv[3];
         $batch=$csv[4];
         $query1="INSERT INTO studentlist(fullname,username,gender,department,batch) 
         VALUES ('$fullname','$username','$gender','$department','$batch') ";
          $run=mysqli_multi_query($conn,$query1);
           $query="INSERT INTO studentlogin(username,password) 
           VALUES ('$username','$str') ";
  
         $run=mysqli_query($conn,$query);
 
 }
 if($run){
            echo "succesfully uploaded";
            echo "<script>window.location.href='addstudent.php';</script>";
        }
        else{
            echo "not uploaded";
        }
  }
 
    
   
   ?> 