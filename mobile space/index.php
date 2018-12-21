<!DOCTYPE html>
<?php $thisPage = basename(__FILE__);?>
  <html>
    <head>
	  <title>Goon Squad | Home</title>
	  <link rel="stylesheet" type="text/css" href="stylesheetreset.css"/>
	  <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
	</head>
	<body onload="toggleNav()">
	
	<script src="main.js"></script>
	  <nav id="nav-main"/>
	    <div id="btn-togle-nav" onclick="toggleNav()"></div>
		<img id="logo_top" src="img\logo_top.png"></img>
		 <h1 id="GoonSquad">Goon Squad</h1>
	  </nav>
	  
	  <aside id="nav-sidebar">
	  <div>
	    <ul>
			<?php 
				include("php/menu.php");
			?>
		</ul>
		</div>
	  </aside>
	   <div class="content">
	  <span id="goon">GOON<font size="10px"> </font>SQUAD</span>
	  <br>
	  <br>
	  <span style=" font-size: 36pt;">Team 3604</span>
	  <br>
	  <br>
	  <p style="margin-top: 6px;">We are the Goon Squad, Team 3604. We are an FRC Robotics Team for Woodhaven High School / Woodhaven-Brownstown School District. We have been a team for 7 years and running, with many great sponsors and mentors supporting us along the way! Our school is located on Van Horn Rd in <strong>Brownstown, Michigan.</p>
	  <br>
	  <h1 id="upcoming">Upcoming Events:</h1>
	  <br>
	  <br>
	  <h2 id="Coming"><i>(Coming Soon)</i></h2>
	  <br>
	  <br>
	  <br>
	  <h1>Visit These Links!</h1>
       <br>
	   <a style="text-decoration: none;" href="http://wbsd.co">
	   <img src="img/wbsd.png" height="10%">
	   </a>
	   <a style="text-decoration: none;" href="http://firstinspires.org">
	   <img id="firstlogo" src="img/firstlogo.png">
	   </a>
	   <a style="text-decoration: none;" href="http://firstinmichigan.org">
	   <img id="Michigan" src="img/Michigan.jpg">
	   </a>	
	   </div>
	   <?php include("php/footer.php")?>
	</body>
 </html>