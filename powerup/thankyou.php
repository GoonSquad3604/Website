<HTML>
	<HEAD>
		<TITLE>Goon Squad | Message Sent</TITLE>
		
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> 
	</HEAD>
	
	<BODY bgcolor="black" onload="startScroll()">
		<div id="pad" style="margin-bottom: 160px"></div>
		<div id="content" style="background-image: url('img/contactfooter.png'); background-position: 0px bottom; background-repeat: repeat-x;">
		<table><tr><td width="15%"><img src="img/logo.png" width="100%"></td>
		<td>
		<H1 style="color: purple; font-size: 36pt; text-shadow: 4px 4px #404040;">THANK YOU</H1>
		<H2 style="color: purple; font-size: 24pt; text-shadow: 2px 2px #404040;">Team 3604</H2>
		</td><td>
		Your message has been sent.</td></tr></table>
			<br><br><br><br><br><br><br><br><br>
			
			</div>
		<div id="menuclosed">
		<img onclick="openMenu()" style="padding-top: 20px;" align="left" src="img/menuicon.png"></img><center style="font-size: 36pt;">
		<img src="img/logo.png" height="64px" style="margin-right: 16px;">GOON SQUAD</center>
		</div>
		<div id="menu">
			<img id = "CloseMenu" style="padding-top: 20px" onclick="closeMenu()" src="img/close.png"></img>
			<div id="menutext">
				<p><a href="index.html">Home</a></p>
				<p><a href="sponsors.html">Sponsors</a></p>
				<p><a href="calendar.html">Calendar</a></p>
				<p id="currentpage">Contact</p>
				<!--<p><a href="news.html">News</a></p>-->
				<p><a href="/pictures/index.html">Pictures</a></p>
			</div>
		</div>
		
		<script>
		
		var menuWidth = 0;
		var interval;
		var x = 512;
		var scrollInterval;
		
		function startScroll()
		{
			scrollInterval = setInterval(scroll,10);
		}
		
		function scroll()
		{
			x--;
			if(x<0)
			{
				x=512;
			}
			document.getElementById("content").style["background-position"] = x + "px bottom";
		}
		
		function slideOpen()
		{
			if(menuWidth == 100)
			{
			document.getElementById("menutext").style.color = "white";
			clearInterval(interval);
			}
			if(menuWidth == 90)
			{
			
			document.getElementById("menutext").style.display = "block";
			}
			menuWidth+=2;
			document.getElementById("menu").style.width = menuWidth + '%';
		}
		function slideClosed()
		{
			if(menuWidth == 100)
			{
			document.getElementById("menutext").style.color = "black";
			}
			
			if(menuWidth == 50)
			{
			document.getElementById("menutext").style.display = "none";
			}
			if(menuWidth == 0)
			{
			
			document.getElementById("CloseMenu").src = "img/close.png";
			document.getElementById("menu").style.display = "none";
			clearInterval(interval);
			}
			menuWidth-=2;
			document.getElementById("menu").style.width = menuWidth + '%';
		}
		function openMenu()
		{
			document.getElementById("menutext").style.color = "black";
			document.getElementById("menu").style.display = "block";
			interval = setInterval(slideOpen, 10);
		}
		
		function closeMenu()
		{
			document.getElementById("CloseMenu").src = "img/menuicon.png";
			interval = setInterval(slideClosed, 10);
		}
		</script>
	</BODY>

</HTML>