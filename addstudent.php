<?php
session_start();
include 'connect.php';
include 'linkaccess.php';

    
     
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="cases.css">
      
      <title>student record list</title>
      
      
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
                       <a href="logout.php" target="_blank"><button class="homelogin">logout</button></a> 

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
                           $sql="select status from studentcase ";
                           $query=mysqli_query($conn,$sql);
                           $rowcount=mysqli_num_rows($query);
                           ?>
                           <span style="background-color:yellow;padding:10px;margin:10px;color:red;font-weigth:bold;font-size:55px;border:1px solid red;border-radius:20px;"><?php echo $rowcount;?></span>
                   </a></li>
                 
               
                  
              </ul>
             </div>
             <div id="case-description">
                <div class="container">
                    <form action="addstudent2.php" method="post" enctype="multipart/form-data">
                    <div class="row roww2">
                                          <div class="col-25">
                                             <label for="idnumber">UPLOAD STUDENT LIST </label>
                                        </div>
                                             <div class="col-75">
                                               <br>
                                                <input type="file"  name="file"  required>
                                              </div>
                                          
                                    </div>
                        
           
  
                                   <div class="row">
                                      <input type="submit" name="submit" value="Submit">
                                    </div>
           
                  </form>
              </div>

              <div id="case-description">
                <div class="container">
                    <form action="addstudent2.php" method="post" enctype="multipart/form-data">
                    <div class="row roww2">
                                        <h1>add student</h1>
                                        <br>
                                             <div class="col-75">
                                               
                                               <label for="">fullname</label>
                                                <input type="text"  name="fullname"  required>
                                              </div>
                                          
                                              <div class="col-75">
                                               
                                               <label for="">username</label>
                                                <input type="text"  name="username"  required>
                                              </div>

                                              <div class="col-75">
                                               
                                               <label for="">gender</label>
                                                <input type="radio"  name="gender" value="M" required>male
                                                <input type="radio"  name="gender" value="F" required>female

                                              </div>

                                              <div class="col-75">
                                               
                                               <label for="">department</label>
                                                <input type="text"  name="department"  required>

                                              </div>
                                              <div class="col-75">
                                               
                                               <label for="">batch</label>
                                                <input type="text"  name="batch"  required>
                                                
                                              </div>
                                    </div>
                        
           
  
                                   <div class="row">
                                      <input type="submit" name="submit2" value="Submit">
                                    </div>
           
                  </form>
              </div>

            </div>
          </div>
            </div>
          </div>
        <footer>
            <h1>copy right&copy;AMU FCSE,2014</h1>
        </footer>
  </section>
        
  </body>
  
                
        
       
  </html>
   
     
   
      






