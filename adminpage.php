<?php
//   include'checkuser.php';
session_start();
include 'connect.php';
include "linkaccess.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
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
                       <a href="logout.php" target="_blank"><button class="homelogin">log out</button></a> 

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
               <li><a href="managestudent.php">manage student</a></li>
                   <li><a href="addstudent.php">add student</a></li>
                   <li><a href="casereport.php">case reports<?php 
                           $sql="select status from studentcase where status=0 ";
                           $query=mysqli_query($conn,$sql);
                           $rowcount=mysqli_num_rows($query);
                           ?>
                           <span style="background-color:yellow;padding:10px;margin:10px;color:red;font-weigth:bold;font-size:55px;border:1px solid red;border-radius:20px;"><?php echo $rowcount;?></span></a></li>
                   <li><a href="allcases.php">All reports
                   <?php 
                           $sql="select status from studentcase";
                           $query=mysqli_query($conn,$sql);
                           $rowcount=mysqli_num_rows($query);
                           ?>
                           <span style="background-color:yellow;padding:10px;margin:10px;color:red;font-weigth:bold;font-size:55px;border:1px solid red;border-radius:20px;"><?php echo $rowcount;?></span>
                   </a></li>
                   <!-- <li><a href="">this is admin page</a></li>
                   <li><a href="">this is admin page</a></li> -->
                  
              </ul>
             </div>

             <div id="case-description">
             <h1 style="text-align:center;margin-top:50px;padding:20px;background-color:yellow;color:black;">
                 <?php

                   echo " welcome this is admin page. ";



               ?>
               </h1> 
                
                
             </div>
          </div>
    </section>
  

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