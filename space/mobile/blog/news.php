<!DOCTYPE html>
<html>
	<head>
		<title>Goon Squad Blog | Home</title>
		<link rel="stylesheet" type="text/css" href="stylesheetreset.css"/>
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
	</div>
	<?php include("php/menu.php")?>-->
	<div class="content">
	<span id="goon">Blog</span>
	<H2 class="cal_goon">Team 3604</H2>
	<!--<span style="float: right; font-size: 36pt; font-weight: bold; margin-top: 14px;">Team 3604</span>-->
	<br><br>
	<H2 style="color: red;">Coming Soon!</H2><br>
	If you want to read the legacy news page, you can do so <a href="legacynews.php">here.</a>
	</div>
	<?php include("php/footer.php")?>	
	</body>
<!--<script src = "js/highlightscript.js">
</script>-->
</html>