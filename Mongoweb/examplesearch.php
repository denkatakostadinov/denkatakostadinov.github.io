

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" type="image/png" href="logo.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css">
	<link rel="stylesheet" href="log-in.css" type="text/css">
  </head>
  <body>
  
	<div class="wrapper row1">
	
	<header id="header" class="clear">
		<fieldset> 
		  <nav>
         
			<ul>
              
			   <li>
                <a href="index.php">Home
                </a>
              </li>
			  <br>
			  <li>
                <a href="examplesearch.php">Search
                </a>
              </li>
              <br>
			  <li>
                <a href="view2.php">Q1: Most pleasant songs
                </a>
              </li>
              <br>
			  <li>
                <a href="view1.php">Q2: Songs with maximum energy 
                </a>
              </li>
			   <br>
			   <li>
                <a href="view3.php">Q3: Songs with minimum sound quailty
                </a>
              </li>
			   <br>
			   <li>
                <a href="view5.php">Q4: Most danceable songs from the 2000's
                </a>
              </li>
			   <br>
			   <li>
                <a href="view4.php">Q5: The songs with lowest tempo
                </a>
              </li>
              
            </ul>
          </nav>
        </fieldset>
      </header>
    </div>
    <center>

      <h1>Display Data from Queries
      </h1>
     <hr> 
     
      <br>
     
   
    

	
 <?php
	//Establish connection with the MongoDB database
    $m = new MongoClient("mongodb://localhost:27017");
    $collection = $m->Muzic->Music;
		echo "<div class='search-containera'>";
    echo "<form action='' method=post>";
    echo "<input type='text' name='artist_name' placeholder='Search by Artist' required>";
    echo "<input type=submit name=search value=Search>";
    echo "</form>";
	echo "</div>";
	//Search the collection for the value provided by the user (using $_POST)
    if (isset($_POST['search'])){
    $song = $_POST['artist_name'];
	$songssearch = $collection->find(array('artist_name' => array('$regex' => $song)));
	echo "<br>";
	
	
    echo "<table border=0 rules=rows width=600>";
	echo "<table id='table'>";
	echo"<tr>";
	echo "<td> Artist Name</td>";
	echo "<td> Song Title</td>";
	echo "<td> Id</td>";
	echo "<td> Year</td>";
	echo "</tr>";
    foreach ($songssearch as $emp){
        echo "<tr>";
		echo "<td>{$emp['artist_name']}</td>";
		echo "<td>{$emp['song_title']}</td>";
        echo "<td>{$emp['id']}</td>";
         echo "<td>{$emp['years']}</td>";
		echo "</tr>";
    }
    echo "</table>";
}

	
?> 
<br></br>
 <?php
	//Establish connection with the MongoDB database
    $m = new MongoClient("mongodb://localhost:27017");
    $collection = $m->Muzic->Music;
		echo "<div class='search-containera'>";
    echo "<form action='' method=post>";
    echo "<input type='text' name='song_title' placeholder='Search by Song' required>";
    echo "<input type=submit name=search1 value=Search>";
    echo "</form>";
	echo "</div>";
	//Search the collection for the value provided by the user (using $_POST)
    if (isset($_POST['search1'])){
    $song = $_POST['song_title'];
	$songssearch = $collection->find(array('song_title' => array('$regex' => $song)));
	echo "<br>";
	
	
    echo "<table border=0 rules=rows width=600>";
	echo "<table id='table'>";
	echo"<tr>";
	echo "<td> Artist Name</td>";
	echo "<td> Song Title</td>";
	echo "<td> Id</td>";
	echo "<td> Year</td>";
	echo "</tr>";
    foreach ($songssearch as $emp){
        echo "<tr>";
		echo "<td>{$emp['artist_name']}</td>";
		echo "<td>{$emp['song_title']}</td>";
        echo "<td>{$emp['id']}</td>";
         echo "<td>{$emp['years']}</td>";
		echo "</tr>";
    }
    echo "</table>";
}

	
?> 

<br></br>
 <?php
	//Establish connection with the MongoDB database
    $m = new MongoClient("mongodb://localhost:27017");
    $collection = $m->Muzic->Music;
		echo "<div class='search-containera'>";
    echo "<form action='' method=post>";
    echo "<input type='text' name='years' placeholder='Search by Year' required>";
    echo "<input type=submit name=search2 value=Search>";
    echo "</form>";
	echo "</div>";
	//Search the collection for the value provided by the user (using $_POST)
    if (isset($_POST['search2'])){
    $song = $_POST['years'];
	$songssearch = $collection->find(array('years' => array('$regex' => $song)));
	echo "<br>";
	
	
    echo "<table border=0 rules=rows width=600>";
	echo "<table id='table'>";
	echo"<tr>";
	echo "<td> Artist Name</td>";
	echo "<td> Song Title</td>";
	echo "<td> Id</td>";
	echo "<td> Year</td>";
	echo "</tr>";
    foreach ($songssearch as $emp){
        echo "<tr>";
		echo "<td>{$emp['artist_name']}</td>";
		echo "<td>{$emp['song_title']}</td>";
        echo "<td>{$emp['id']}</td>";
         echo "<td>{$emp['years']}</td>";
		echo "</tr>";
    }
    echo "</table>";
}

	
?> 

</center>

<div class="wrapper row3">
      <footer id="footer" class="clear">
        <p>University of Bradford`s students Web based application
        </p>
        <p class="fl_left">1989 - All Rights are not reserved - Database Coursework</p>
        <p class="fl_right">Version by Denis Kostadinov</p>
      </footer>
    </div>
  </body>
</html>
