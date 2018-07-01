<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/png" href="images/bradford-logo.png" />
    <title>Login form
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/log-in.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="wrapper row1">
      <nav>
        <div id="hgroup">
          <a href="index.php">
            <img border="0" alt="W3Schools" src="images/logo.png">
          </a>
          </nav>	
        </div> 
      <div class="container">
        <section id="content">			  
          <div class="login"> 
            <h1>
              <strong>Login
              </strong>
            </h1>
            <form action="login.php" method="post">
              <input type="text" id="email" name="email" placeholder="Email" required>
              <input type="password" id="password" name="password" placeholder="Password" required>
              <input type= "submit"  name="submit" class="log login-submit" value ="LOGIN">		 		 		
            </form>
          </div>
          <a href="LOST_YOUR_PASSWORD.php">Lost your password?
          </a>
          <a href="register_button.php">Register
          </a>
          </div>
      </div>
      </section>
  </body>
  <div class="wrapper row3">
    <footer id="footer" class="clear">
      <p class="fl_left">  2017 - All Rights are not reserved - Software Engineering 
>
       
      </p>
      <p class="fl_right">Version by 
        Team 13
        
      </p>
    </footer>
  </div>
</html>
