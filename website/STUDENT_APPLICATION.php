<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/png" href="images/bradford-logo.png" />
    <title>STUDENT APPLICATION
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/student-application.css" type="text/css">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign Up Form
      </title>
      <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/css2.css">
    </head>
    <body>
      <div class="wrapper row1">
        <header id="header" class="clear">
          <a href="index.php">
            <img border="0" alt="W3Schools" src="images/logo.png" >
          </a>
          </form>
        <nav>
          <ul>
            <li>
              <a href="STUDENT_APPLICATION.php">Student Application
              </a>
            </li>
            <li>
              <a href="STAFF_REQUEST.php">Staff Request
              </a>
            </li>
            <li>
              <a href="ADMIN_CONTROL_PAGE.php">Admin Control page
              </a>
            </li>
            <li>
              <a href="LOG_IN.php">Log In
              </a>
            </li>
          </ul>
        </nav>
        </header>
      </div>
    <form action="application.php" method="post">
      <h1>APPLICATION FORM
      </h1>
      <fieldset>
        <legend>
          <span class="number">1
          </span>Your basic info
        </legend>
        <label for="name">First Name:
        </label>
        <input type="text" id="text" name="user_name">
        <label for="name">Last Name:
        </label>
        <input type="text" id="text" name="user_surname">
        <label for="name">University:
        </label>
        <input type="text" id="text" name="user_uni">
        <label for="email">Email:
        </label>
        <input type="text" id="email" name="user_email">
        <label>Module:
        </label>
        <input type="text" id="text" name="user_module">
        <form method="post">
          <label>Have you completed the training program for this job?
          </label>
          <input type="checkbox" name="user_info" value="YES" />YES 
          <br />
          <input type="checkbox" name="user_info" value="NO" />NO
          <br />                 
          </fieldset>
        <button type="submit">APPLY
        </button>
        </form>
      </body>
  </head>
  <div class="wrapper row3">
    <footer id="footer" class="clear">
      <p>University of Bradford`s students Web based application
      </p>
      <p class="fl_left">Copyright &copy; 2016 - All Rights are not reserved - Software Engineering 
        <a href="#">
        </a>
      </p>
      <p class="fl_right">Version by 
        <a href= title="Web App">Team 13
        </a>
      </p>
    </footer>
  </div>
  </body>
</html>