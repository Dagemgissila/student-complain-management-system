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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index </title>
    
    <!-- <style>
        .me{
    background-image: url(image/400088200650_444958.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
    background-position:center;
    height:300px;
    display: flex;
    justify-content: center;

    background-repeat: no-repeat;
    background-size: cover;
    animation-name: dagem;
    animation-duration: 9s;
    animation-delay:0s;
    animation-iteration-count:infinite;
    animation-timing-function: ease-in;
    animation-fill-mode: forwards;

}
@keyframes dagem{
    0% {background-image: url("image/best\ 2.jpg");}
    25% {background-image: url("image/best\ 3.jpg");}
    50% {background-image: url("image/best\ 5.jpg");}
    75% {   background-image:url("image/best\ 1.jpg");}
    100% {background-image: url("image/best\ 4.jpg");}
}  
    </style> -->
   <link rel="stylesheet" href="index.css">
 
   <link rel="stylesheet" href="cases.css">
</head>
<body class="me">
<section>
                        <div id="register-description">
                            <div class="container">
                                <form  method="post"  action="adminsignup.php" onsubmit="return validate()">
                                    <fieldset>
                                        <legend>ADMIN SIGN UP</legend>
                                        <div class="row">
                                          <div class="col-25">
                                             <label for="idnumber">username</label>
                                        </div>
                                             <div class="col-75">
                                                <input type="text" id="idnumber" name="username" placeholder="Your username.." required>
                                              </div>
                                              <span class="error" id="iderror"></span>
                                    </div>
                                    <div class="row">
                                          <div class="col-25">
                                             <label for="fname">password</label>
                                        </div>
                                             <div class="col-75">
                                                <input type="password" id="key" name="password" placeholder="Your password .." required>
                                              </div>
                                              <span class="error" id="unerror"></span>
                                    </div>
                                    <div class="row">
                                          <div class="col-25">
                                             <label for="fname">confirm password</label>
                                        </div>
                                             <div class="col-75">
                                                <input type="password" id="key" name="confirmpassword" placeholder="Your confirmation password .." required>
                                              </div>
                                              <span class="error" id="unerror"></span>
                                    </div>


                                           
                                       
                                               <div class="row">
                                                  <input type="submit" value="SIGN UP"  name="submit">
                                                </div>
                                            </fieldset>
                              </form>
                          </div>
                        </div>
                    </section>
</body>
</html>