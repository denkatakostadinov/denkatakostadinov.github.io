<!DOCTYPE html> <html lang="en" dir="ltr"> <head>
<link rel="icon" type="image/png" href="logo.png" />
<title>Upload
form</title>
  <meta charset="UTF-8">

<script src="rssticker.js" type="text/javascript"> 
</script>

 <link rel="stylesheet" href="layout.css" type="text/css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="log-in.css">
 <div class="wrapper row1"> <nav> <div id="hgroup">
    </div>

    </nav>

	</div>
<body>
<a href="index.php"><img src="logo.png" alt="Logo"></a>
 <div class="container">
<br></br>
<br></br>
	<section id="content">
<h1>Upload page</h1>
<strong>Upload form</strong>
<br></br>
<form action="UPLOAD1.php" enctype="multipart/form-data"
method="post"> <input name="file"  multiple type="file" /> <input name="submit"
type="submit" value="Upload File" /> </form>
<br></br>

<form action="test.php">
  URL:<br>
  <input type="text" name="firstname" value=""><br>
 <input type="submit" value="Submit">
</form>


</div><!-- button -->

</section><!-- content --> </div><!-- container --> </body>

<script type="text/javascript">
//rssticker_ajax(RSS_id, cachetime, divId, divClass, delay, optionalswitch)
//1) RSS_id: "Array key of RSS feed in PHP script"
//2) cachetime: Time to cache the feed in seconds (0 for no cache)
//3) divId: "ID of DIV to display ticker in. DIV dynamically created"
//4) divClass: "Class name of this ticker, for styling purposes"
//5) delay: delay between message change, in milliseconds
//6) optionalswitch: "string" to control which parts of an item to display: "date" or "date+description"
new rssticker_ajax("BBC", 600, "ddbox", "bbcclass", 3500, "date+description")
</script>


</body>
 <div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">All Rights are not reserved - Computer Science <a
href="#"></a></p>
    <p class="fl_right">Version by Denis
Kostadinov</p>
  </footer> </div> </html>
