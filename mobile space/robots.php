<!DOCTYPE>
<html>
	<head>
		<title>Goon Squad | Robots</title>
	    <link rel="stylesheet" type="text/css" href="stylesheet.css"/><link rel="stylesheet" type="text/css" href="stylesheetreset.css"/>
	    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
		</head>
		<body onload="toggleNav()">
		
		<script src="main.js"></script>
	  <nav id="nav-main"/>
	    <div id="btn-togle-nav" onclick="toggleNav()"></div>
		<img id="logo_top" src="img/logo_top.png"></img>
		 <h1 id="GoonSquad">Goon Squad</h1>
	  </nav>
	  
	  <aside id="nav-sidebar">
	    <ul>
			<?php 
				include("php/menu.php");
			?>
		</ul>
	  </aside>
	<!--This menu will probably be generated by PHP at some point.
	<div class="menu">
		<p class="link" mouseover="mouseOver()" mouseout="mouseOut()"><a href="index.php">Welcome</a><span id="rectangle"></span></p>
		<p class="link"><a href="index.php">Calendar</a><span id="rectangle"></span></p>
	</div>-->
	<!--<?php include("php/robots.php")?>-->
	<div class="content">
	<span id="goon">Robots</span>
	<br><br>
	<H2 class="cal_goon">Team 3604</H2>
	<br>
	<p>This page has not landed yet. Check back later for updates.</p>
	</div>
	<?php include("php/footer.php")?>
	</body>
</html>