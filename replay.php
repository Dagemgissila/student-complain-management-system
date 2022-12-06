<?php
   session_start();
    require 'connect.php';
    if(isset($_POST["submit"])){
        $replay=$_POST["replay"];
        $query="INSERT INTO adminreplay(username,replay) VALUES('".$_SESSION['username']."','$replay')";
        $run=mysqli_query($conn,$query);

    }
    


?>