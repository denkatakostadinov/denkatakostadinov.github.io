<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel="icon" type="image/png" href="images/bradford-logo.png" />
<title>REGISTER</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/css2.css">
    </head>
    <body>

<div class="wrapper row1">
  <header id="header" class="clear">
    <a href="index.php">
<img border="0" alt="W3Schools" src="images/logo.png">
</a>
 
     
    </form>
    <nav>
      <ul>
        <li><a href="STUDENT_APPLICATION.php">Student Application</a></li>
        <li><a href="STAFF_REQUEST.php">Staff Request</a></li>
        <li><a href="ADMIN_CONTROL_PAGE.php">Admin Control page</a></li>
        <li><a href="LOG_IN.php">Log In</a></li>
      </ul>
    </nav>
  </header>
</div>
<p>University of Bradford`s students Web based application</p>
  <form action="reg1conn.php" method="post">
      
        <h1>REGISTER</h1>
		<p>Name:</p>
        <input type="text" name="Name" size="20" maxlength="25" placeholder="Name" required/>
            
        <p>Surname:</p>
        <input type="text" name="Surname" size="20" maxlength="25" placeholder="Surname" required/>
		
		<p>Email:</p>
        <input type="email" name="Email" size="20" maxlength="50" placeholder="yourname@gmail.com" required/> </br>
		
		<p>University:</p>
        <input type="university" name="University" size="40" maxlength="50" placeholder="University" required/> </br>
          
		<p>Course:</p>
        <input type="course" name="Course" size="40" maxlength="50" placeholder="Course" required/> </br>		  
        
		<p>Gender</p>
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>

		
		<p>Password:</p>
        <input type="password" name="Password" size="20" maxlength="25" placeholder="Password" required/>
		
		<input type="submit" value="Submit" class="button"/>
		
		

<br />
        
       
      </form>
      
    </body>

</head>

          



















<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2016 - All Rights are not reserved - Software Engineering <a href="#"></a></p>
    <p class="fl_right">Version by <a href= title="Web App">Team 13</a></p>
  </footer>
</div>
</body>
</html>