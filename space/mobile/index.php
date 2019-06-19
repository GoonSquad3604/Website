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
	  </td><td width="33%" align="center"><br><br><br>
		<h2 style="font-size: 32pt;">Upcoming Events:</h2>
		<br>
		<h3 style="font-size: 16pt;"><i>Indiana Robotics Invitational</i></h3>
		<br>
		<p class="dates">July 11th - 13th</p>
		<br>
		<br>
		<h3 style="font-size: 16pt;"><i><a style="shadow: 16px;" href="http://goonettesinvitational.org">Goonettes Invitational</a></i></h3>
		<br>
		<p class="dates">September 13th - 14th</p>
		For more information, contact <a href="mail:goonettesinvitational@gmail.com">goonettesinvitational@gmail.com</a>
		<br><br><br><br><br><br><br><br>
	  <h1>Visit These Links!</h1>
       <br>
	   <a style="text-decoration: none;" href="http://wbsd.co">
	   <img src="img/wbsd.png" height="10%">
	   </a>
	   <a style="text-decoration: none;" href="http://firstinspires.org">
	   <img id="firstlogo" src="img/firstlogo.png">
	   </a>
	   <a style="text-decoration: none;" href="http://firstinmichigan.org">
	 <img id="Michigan" src="img/firstinmichigan.png" height="10%">
	   </a>	
	   </div>
	   <?php include("php/footer.php")?>
	</body>
 </html>
