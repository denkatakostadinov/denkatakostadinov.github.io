<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/png" href="images/bradford-logo.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/admin-control-page.css" type="text/css">
  </head>
  <body>
    <div class="wrapper row1">
      <header id="header" class="clear">
        <a href="STAFF_LOGIN.php">
          <img border="0" alt="W3Schools" src="images/logo.png">
        </a>
        <fieldset>
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
        </fieldset>
      </header>
    </div>
    <form>
      <h1>Display Data from Student Application
      </h1>
      <hr>
      <!--line under h1-->
      <br>
      <!--new line-->
      <?php
include('connect-mysql.php');
$sqlget = "SELECT * FROM Studentapplication";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error');
echo "<table>";
echo "<tr><th>ApplicationID</th><th>Firstname</th><th>Lastname</th><th>University</th><th>Email</th><th>Module</th><th>Trained</th></tr>";
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
echo "<tr><td>";
echo $row['ApplicationID'];
echo "</td><td>";
echo $row['Firstname'];
echo "</td><td>";
echo $row['Lastname'];
echo "</td><td>";
echo $row['University'];
echo "</td><td>";
echo $row['Email'];
echo "</td><td>";
echo $row['Module'];
echo "</td><td>";
echo $row['Trained'];
echo "</td></tr>";
}
echo"</table>";
?>
    </form>
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
