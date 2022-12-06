
<?php
 require 'connect.php';
     $sql="SELECT * FROM studentlogin";
     $result=mysqli_query($conn,$sql);
    
  
  
  
  
     while($row=mysqli_fetch_assoc($result)){
      $username=$row['username'];
      if($username==false){
          header('location:$_SERVER["PHP_SELF"]');
        
                 }
      else{
          header('location:homepage.php');
          
      }
  
    }


?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>sign up page</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <style>
        body  
{  
    margin: 0;  
    padding: 0;  
    background: url("image/best\ 5.jpg"),rgba(0, 0, 0, 0.5);
    background-blend-mode: darken;

    font-family: 'Arial';  
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background-color:rgba(1,1,0,0.5); 
        border-radius: 15px ;  
          
}  
h1{  
    text-align: center;  
    color: white;  
    padding: 20px;  
}  
label{  
    color: white;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}  
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    float: right;  
    background-color: grey;  
}
    </style>  
</head>    
<body>    
    <h1>ARBA MINCH UNIVERSITY FACULTY OF COMPUTING AND SOFTWARE ENGINERiING ADMIN SIGN UP PAGE</h1><br>    
    <div class="login">    
    <form action="adminsignup.php" id="login" method="post">    
        <label><b>User Name     
        </b>    
        </label>    

        <input type="text" name="username" id="Uname" placeholder="Username" required>    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>   

        <input type="Password" name="password" id="Pass" placeholder="Password" required>    
        <br><br>   
     
        <label><b>confirm password    
        </b>    
        </label>    
        
        <input type="password" name="confirmpassword" id="Uname" placeholder="Username" required>    
        <br><br>


        <input type="submit" value="SIGN UP"  name="submit">     
        <br><br>    
       
        
    </form>     
</div>    
</body>    
</html> 