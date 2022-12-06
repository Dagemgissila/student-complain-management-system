
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
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
                    
                </div>
        </div>
    </header>
    <section class="stud-login">
        <div class="container-form">
            <div class="header">
                <h1>login here</h1>
            </div>
            <div class="form-div">
                 <form action="login2.php" method="post">
                     <span class="input-span">
                         <label for="">user name</label>
                         <input type="text" name="username" placeholder="username"><br>
                     </span>
                     <span class="input-span">
                         <label for="password">password</label>
                         <input type="password" name="password"  placeholder="password"><br>
                     </span>

                     <!-- <span class="input-span">
                         <label for="password">ROLE</label>
                          <select name="role" id="">
                              <option value="admin">admin</option>
                              <option value="student">student</option>
                          </select>
                     </span> -->

                     <span class="input-span">
                     <!-- <input type="submit" name="login" value="login"> -->
                     
            <button type="submit" name="login" value="login" id="login-button">login</button>
                       <button id="register-button"><a href="signup.php">SIGN UP</a></button>
                     </span>
                 </form>
                 <span id="for-register">
                     
                   
                 
               </span>
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