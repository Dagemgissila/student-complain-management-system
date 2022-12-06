<?php
   $servername="localhost";
   $username="root";
   $password="";
   $DBname="ipproject";
   $conn=mysqli_connect($servername,$username,$password,$DBname);
   if(!$conn){
       die("unable to connect");
   }



?>