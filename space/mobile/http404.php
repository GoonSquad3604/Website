<html>
	<head>
		<title>Goon Squad | HTTP404</title>
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
	<!--<?php include("php/menu.php")?>-->
	<div class="content">
	<span id="goon">HTTP<span style="font-family: SpaceFont;font-weight: bold; color:red; font-size: 60pt;">404</span><br>
	<span class="cal_goon">Team 3604</span>
	<p style="margin-top: 6px;"><br>
	<span id="Roads">SPACEY ROADS<br>
	TAKE ME <a href="index.php" style="text-decoration: none;">HOME</a><br>
	TO THE PAGE<br>
	I BELONG<br></span>
	</p>
	Sorry, but the page you are looking for does not exist. You can use the sidebar on the left to get back to wherever
	you were going. If the page you are looking for appears to be missing, use the contact page to notify the Goon Squad
	immediately.
	
	<br><br><br>
	 </a>	
	</div>
	<?php include("php/footer.php")?>
<script src = "js/highlightscript.js">
</script>
<script src = "js/images.js">
</script>
</html>