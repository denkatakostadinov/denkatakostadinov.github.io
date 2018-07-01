<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>STAFF REQUEST
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/staff-request.css" type="text/css">
    <head>
      <link rel="icon" type="image/png" href="images/bradford-logo.png" />
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
          <a href="STAFF_LOGIN.php">
            <img border="0" alt="W3Schools" src="images/logo.png">
          </a>
          <nav>
            <ul>
              <li>
                <a href="STAFF_REQUEST1.php">Staff Request
                </a>
              </li>
              <li>
                <a href="VIEW_APPLICATION.php">View Applications
                </a>
              </li>
              <li class="right">
                <a href="index.php">Log Out
                </a>
              </li>
            </ul>
          </nav>
        </header>
      </div>
      <form action="request_staff.php" method="post">
        <h1>REQUEST
        </h1>
        <fieldset>
          <label>First Name:
          </label>
          <input type="text" id="text" name="user_name">
          <label>Last Name:
          </label>
          <input type="text" id="text" name="user_surname">
          <label for="name">Module:
          </label>
          <input type="text" id="name" name="user_module">
        </fieldset>
        <label for="name">Number of Students:
        </label>       
        <select id = "myList" name="number">
          <option value = "1">one
          </option>
          <option value = "2">two
          </option>
          <option value = "3">three
          </option>
          <option value = "4">four
          </option>
        </select>
        <label for="email">Email:
        </label>
        <input type="text" id="email" name="user_email">
        <button type="submit">REQUEST
        </button>
      </form>
      </fieldset>
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