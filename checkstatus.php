
<?php

session_start();

include 'connect.php';
include "linkaccess.php";
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
    <title>check status</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cases.css">
    <style>
  

  #list {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  min-width: 100%;
  margin-bottom:20px;
  }
  
  #list td, #list th {
  border: 1px solid #black;
  padding: 10px;
  }
  
  #list tr:nth-child(even){background-color: #f2f2f2;}
  
  /* #list tr:hover {background-color: #ddd;} */
  
  #list th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  }
  .text{
    background-color:rgb(13, 34, 54);
    min-height:50px;
    border:1px solid green;
    border-radius:20px;
    margin:15px;
    width:85%;
    
  }
  .text1{
    min-height:50px;
    border:1px solid white;
    border-radius:15px;
    background-color:rgb(168, 181, 193);
    width:85%;
    margin-left:10%;
   

  }
  .text p{
    text-align:left;
    margin-left:90px;
    margin:20px;
    color:white;
    font-weight: bold;
  }
  .text1 p{
    text-align:center;
    margin-right:50px;
    font-weight: bold; margin:20px; min-height:50px;
    overflow:hidden;
  }
      </style>
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
                   <li><a href="cases.php">Apply for the case</a></li>
                   <li><a href="checkstatus.php">check status
                    
                   </a></li>
                   <li><a href="updatepassword.php">change password</a></li>
                  
              </ul>
             </div>

             <div id="case-description">
                
             
                     <!-- <thead>
                     <tr>
                         
                         <th>your case</th>
                         <th>replay</th>
                         <th>status</th>

                     </tr>
                    </thead>  -->
                     <?php
                         $result="select * FROM studentcase where username='".$_SESSION['username']."'";
                         $query=mysqli_query($conn,$result);
                           while($row=mysqli_fetch_assoc($query))
                           {
                             $status=$row['status'] ;
                             $reply=$row['response'];
                     ?>
                    
                        
                         
                        <div class="text"> <p><?php  echo $row['cases'] ;
                        if($status=="1")
                             {echo "\t\t\t🗸🗸";}
                              else
                              {echo "\t\t\t 🗸";}  ?>
                              </p>
                              </div>
                        <?php if($reply==true) 
                           {

                          ?>
                       <div class="text1"><p><?php  echo $row['response'] ?></p></div>
                          
                    <?php  }?>
                         <?php  ?>
          
                         
                        <?php
                           }
                        ?>
                

                
             </div>
          </div>
    </section>
  

    <section >
        <div  class="info-container-last">
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