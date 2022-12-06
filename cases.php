
<?php
//   include'checkuser.php';
session_start();
include "linkaccess.php";
require 'connect.php';
$sql="SELECT status FROM studentlogin WHERE username='".$_SESSION["username"]."'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{
    $status=$row["status"];
    if($status==0){
        header("location:updatepassword.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student case management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cases.css">
  
</head>
<body>
    <header>
        <div class="top-header">
                <div class="amulogo">
                  <img src="image/ArbaMinchUniversity-logo_0.gif" alt="">
                    <div class="rows">
                      <h1>ARBA MINCH  UNIVERSITY </h1>
                      <h1> Faculty of Computing and Software Engineering</h1>
                    </div>
                    <span></span>
                    
                </div>
                <div class="amufcse">
                    <h1>student cases information management system</h1>
                    <div>
                       <a href="logout.php" target=""><button class="homelogin">log out</button></a> 

                    </div>
                    
                </div>
        </div>
    </header>
    <section>
          <div id="case-container">
              <div id="case-nav">
                    <span id="case-head">
                       <h2>Student Cases</h2>
                    </span>
                  <ul>
                      <li><a href="password1.php">Apply for the case</a></li>
                      <li><a href="checkstatus.php">check status
                      
                        
                      </a></li>
                      <li><a href="updatepassword.php">change password</a></li>
                     
                 </ul>
            </div>

            <div id="case-description">
                <div class="container">
                    <form action="phpcases.php" method="post">
                    <div class="row roww2">
                
                   

                     
                     <div class="row">
                                      
                                       <div class="col-25">
                                            <label for="subject">title</label>
                                       </div>
                                    
                                    
                         <select id="cases" name="casetitle" style="width:75%;">
                            <option value="course registration">course registration</option>
                            <option value="course add and drop">course add and drop</option>
                            <option value="withdraw and read mission">withdraw or readmission</option>
                            <option value="exam related">exam related</option>
                            <option value="grade related">grade related</option>
                            <option value="password">password</option>
                            <option value="other">others</option>
                            
                        </select>
               
                                    
                            </div>
                     
                           
           
                            <div class="row">
                                      <div class="col-25">
                                            <label for="subject">Subject</label>
                                       </div>
                                     <div class="col-75">
                                          <textarea id="subject" cols="400" rows="10" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                                      </div>
                            </div>
                                   <div class="row">
                                      <input type="submit" name="submit" value="Submit">
                                    </div>
           
                  </form>
              </div>
            </div>
          </div>
            </div>
          </div>
          <section>
            <div class="info-container-last">
                   <div class="contact-info-div cmn-info">
                       <h2>contact us</h2>
                        <ul>
                            <li>corporate communication</li>
                            <li>p.o box 21</li>
                            <li>Arba minch university</li>
                            <li>tel:251-4681-4986</li>
                            <li>fax:+251-46881-0820/0279</li>
                        </ul>
                         
    
                   </div>
    
                   <div class="register-info-div cmn-info">
                       <h2>register</h2>
                       <ul>
                           <li><a href="#">about us</a></li>
                           <li><a href="#">alumni</a></li>
                           <li><a href="#">alumni registration</a> </li>
                           <li><a href="#">contact us</a></li>
                           <li><a href="#">alumni</a></li>
                       </ul>
                          
    
                   </div>
    
                   <div class="college-info-div cmn-info">
                          <h2>colleges</h2>
                          <ul>
                              <li><a href="#">agriculture </li>
                              <li><a href="#">business and economics </li>
                              <li><a href="#">medicine and health </li>
                              <li><a href="#">natural science </li>
                              <li><a href="#">social science and humanities </li>     
                              
                             
                          </ul>
                   </div>
    
                   <div class="system-info-div cmn-info">
                         <h2>sytem</h2>
                    <ul>
                        <li><a href="#">SMIS</li>
                        <li><a href="#">AMU mail </li>
                        <li><a href="#">Office 365</li>
                        <li><a href="#">AMU RDB</li>
                        <li><a href="#">E-learning</li>     
                        
                       
                    </ul>
    
                   </div>
    
            </div>
     </section>
 <section>
        <footer>
            <h1>copy right&copy;AMU FCSE,2014</h1>
        </footer>
  </section>
</body>
</html>