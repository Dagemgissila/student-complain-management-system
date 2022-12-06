 <?php
    if(!isset($_SESSION["username"])){

      echo "<script>alert('unable to acces this page with out login')</script>";
      echo "<script>window.location.href='login.php';</script>";

     }
    



?> 