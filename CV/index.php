<!DOCTYPE html PUBLIC >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal info and CV</title>
<meta name="keywords" content="Personal info and CV" />
<meta name="description" content="Personal ingo and CV" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />


<script type="text/javascript" src="js/jquery.min.1.2.6.js"></script>
<script type="text/javascript" src="js/jquerycssmenu.js"></script>
<script type="text/javascript" src="js/jquery.min.1.3.2.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
  var currentPosition = 0;
  var slideWidth = 750;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});
</script>
</head>
<body>
<div id="templatemo_top_panel_wrapper_outter">
<div id="templatemo_top_panel_wrapper_inner">
	<div id="templatemo_top_panel">
    	<div id="templatemo_menu">

<div id="myjquerymenu" class="jquerycssmenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a>Websites</a>
  <ul>
  <li><a href="../website/index.php">Group Project</a></li>
  <li><a href="../Amazon/Amazon.php">Phishing Amazon</a></li>
  <li><a href="../Mongoweb/index.php">Mongo</a></li>
  </ul>
</li>

<li><a>Projects</a>
  <ul>
  <li><a href="../login.php">Final Year Project</a></li>
  </ul>
</li>
<li><a href="contact.php" class="margin_l10">Contact</a></li>
</ul>
<br style="clear: left" />
</div>

        </div>
        
        <div id="templatemo_banner">
        
	        <div id="site_title">
                <h1><a href="index.php" target="_parent">
                
                
                <span>Personal information</span>
                
                
               
                
                </h1>
			</div>
            
        </div> <!-- end of templatemo_banner -->
    
    </div> <!-- end of templatemo_top_panel -->
    
</div> <!-- end of templatemo_top_panel_wrapper_inner -->
</div> <!-- end of  templatemo_top_panel_wrapper_outter -->

<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    
    <div id="templatemo_popular_posts">
        
        <div id="slideshow">
          <div id="slidesContainer">                                                                               <!-- snimka na sait -->     
            <div class="slide"> <a href="../website/index.php" target="_blank"> <img src="../screenshot/group.png" alt="Group Project" width="380" height="190" />
              <h2>Group Project</h2>
              <p>It has been given to me and my team the task to create a web-based application connected to MySQL database. The web application was created specialy for the University of Bradford. It can be used by both students and staff. From the student side gives the ability to apply for a assistant in the university. On the other hand the staff can make requests for assistance with the ability to specify how many do they need.  </p>
            </a> </div>
            <div class="slide"> <a href="../Amazon/Amazon.php" target="_blank"> <img src="../screenshot/amazon.png" alt="Phishing Amazon" width="380" height="190" />
              <h2>Phishing Amazon</h2>
              <p>For my Cyber Security module I had to create a phishing website copy of Amazon. It is conneted to MySQL database and whoever login in with his username and password, their details will be send to the database. In addition I created a survey so it can look legitimate.</p>
            </a> </div>
            <div class="slide"> <a href="../Mongoweb/index.php" target="_blank"> <img src="../screenshot/mongo.png" alt="Mongo Website" width="380" height="190" />
              <h2>Website with MongoDB</h2>
              <p>In my Final year I have been given the coursework to create a web-based application connected to MongoDB database. There was an excel file which I had to import in MongoDB as a database. The functions of the website are to search for specific things in the database using Mongo quieres in PHP. They are preset buttons as well as a search option. </p>
            </a> </div>
            <div class="slide"> <a href="../login.php" target="_blank"> <img src="../screenshot/fyp.png" alt="FYP" width="380" height="190" />
              <h2>DigScreen</h2>
              <p>As a Final Year Project I chose to create a Digital signage using a Raspberry Pi platform.It is controlled via IP connection. All of the content from the playlist will be uploaded to the slave devices by FTP and will be updated every 24 hours. All of the slave devices are controlled by one master PC. The slaves always starts in receive mode. It might need to manually insert the new IP when boot up. In addition it is able to add a video stream into the playlist and after the end of it the playlist will continue.</p>
            </a> </div>
          </div>
        </div> <!-- end of slide show -->
    
   	  </div> <!-- end of templatemo_popular_posts -->
      
      <div id="templatemo_main_content_top"></div>
      <div id="templatemo_main_coontent">
      
        <div id="main_column">
        	
            <div class="post_box">
		 <div class="date_box">
                	<p>2018</p>
                </div> <!-- end of date box -->               
                <!-- CV--> 
				
				<div class="post_body">
                       
                       <h2>CV</h2>
                       	
                        
                        <div class="post_content">
                           <img src="../screenshot/cv.png" alt="CV" width="750"
		
            </div> 
	<img src="../screenshot/cv1.png" alt="CV" width="750"
</body>
</html>
