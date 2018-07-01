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
   <form>
      <h1>Display Data from Queries
      </h1>
      <hr>
     
      <br>
     
   
    </form>
   



	
	<?php
 try {
 $connection = new MongoClient();
 $database = $connection->selectDB('Muzic');
 $collection = $database->selectCollection('Music');
 } catch(MongoConnectionException $e) {
 die("Failed to connect to database ".$e->getMessage());
 }

 $cursor = $collection->find()->sort( array("Sound_quailty" => 1 ))->limit(5);
?>
<fieldset>
 <div id="contentarea">
 <div id="innercontentarea">
<?php foreach ($cursor as $article) {?>
  
 
 <h2><?php echo "Song Artist: ", substr($article['artist_name'], 0, 200); ?></h2>
 <h2><?php echo "Song Title: ", substr($article['song_title'], 0, 200); ?></h2>
 <p> <?php echo "Song ID: ", $article['id']; ?> </p>
 <p> <?php echo "Song Quality: ", $article['Sound_quailty']; ?> </p>
 
<?php } ?>
 </div>
 </div>
 </fieldset>
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