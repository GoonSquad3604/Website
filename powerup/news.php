<HTML>
	<HEAD>
		<TITLE>Goon Squad | News</TITLE>
		
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"> 
	</HEAD>
	
	<BODY bgcolor="black" onload="startScroll()">
		<div id="pad" style="margin-bottom: 160px"></div>
		<div id="content" style="background-image: url('img/newsfooter.png'); background-position: 0px bottom; background-repeat: repeat-x;">
		<table><tr><td width="15%"><img src="img/logo.png" width="100%"></td>
		<td>
		<H1 style="color: purple; font-size: 36pt; text-shadow: 4px 4px #404040;">NEWS</H1>
		<H2 style="color: purple; font-size: 24pt; text-shadow: 2px 2px #404040;">Team 3604</H2>
		</td><td>
		This is news about what is currently going on in the Goon Squad!</td></tr></table>
		
			<h2>1/9/18</h2>
			<p><span style="font-size: 12pt;"><strong>We Moved!</strong></span></p>
			<p>On January 4th, the Goon Squad left it's old room at Patrick Henry Middle School and moved to a new
			room at Woodhaven High School. The Goon Squad's room is in the new industrial arts wing of the building,
			which just opened on the 8th. You can see a time lapse of the new room being set up
			<a href="http://youtube.com/watch?v=c2vyYYws_SY">here</a>.</p>
			
			<h2>11/15/17</h2>
			<p><span style="font-size: 12pt;"><strong>DADARA Winter Challenge</strong></span></p>
			<p> We will be at the DADARA Winter Challenge on December 2, 2017 from 7:00 AM to 4:00 PM.
			The challenge will be at PHMS, and it will feature robots playing a new game called Robot Hockey,
			created by some members of the Goon Squad. We hope to see you there.</p>
			<h2>7/6/17</h2>
			<h3 style="color: #000000;">Meet the Goonettes</h3>
			<p><img style="padding: 0px; margin: 0px;" src="img/Untitled.png" width="30%" align="left" /> 
			The Goon Squad will be participating at the Big Bang event at the Taylor Sportsplex. 
			The team will not just be bringing one robot and one drive team to the event, however.
			Instead, there will be one drive team using the same bot that was used during the main season,
			and one new bot being driven by the Goonettes.
			The Goonettes contains the three media girls,
			Alex, Maddie, and Audrey.
			Their bot picks up gears from the floor instead of from above. 
			Make sure to go to the Big Bang event in order to see that bot in action.</p>
			<h2>&nbsp;</h2>
			<br>
			<h2>4/1/17</h2>
			<h3 style="color: #000000;">Woodhaven District Event</h3>
			The Goon Squad participated in the district event at the Woodhaven Event event from March 24 to March 25. The Goon Squad participated in 12 qualifying matches, and won 8 of them. The team seeded eighth, but team 5090, Torque-Nado invited the Squad to the #5 alliance, and they accepted, along with 815, Advanced Power. The alliance won one of the three qualifying matches, but lost the other two, and were elimitated.</td>
			
			<h2>3/16/17</h2>
			<h3>St. Joeseph District Event</h3>
			We participated in the district event at St. Joseph High School District event from March 10 to March 11. The Goon Squad participated in 12 qualifying matches. The Team lost 4 matches and won 8 of them. Because the team seeded ninth and was moved up to the fifth alliance captain, we selected alliance which contained team 66, the Grizzlies, and team 6627, the Nordic Knights. Unfortunately, we were eliminated in quarterfinals. <br /><br /><br /></td>
			
			<h2>2/28/17</h2>
			<h3>Goon Squad Trivia Night</h3>
			The Goon Squad recently had a trivia night at the Woodhaven Moose. The trivia night went very successfully, and everyone had a great time. <br /><br /><br /></td>
			
			<h2>2/18/17</h2>
			<h3>Goon Squad Chipotle Fundraiser</h3>
			<img src="img/chipotle.png" align="left" />The Goon Squad is having a fundraiser at Chipotle, a Mexican fast food restaurant. It will be on March 29 from 4:00 PM to 8:00 PM EDT. The fundraiser will be held at the Chipotle at 23061 Allen Rd, Woodhaven, MI 48183. We look forward to seeing you then!</td>

			<br><br><br><br><br>
			<br><br><br><br><br>
			<br><br><br><br><br>
			<br><br><br><br><br>
			
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
				<p><a href="contact.html">Contact</a></p>
				<p id="currentpage">News</p>
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