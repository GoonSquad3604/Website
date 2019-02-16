<!--<!DOCTYPE html>
  <html>
	<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
	</head>
    <body>
		<div id="footer">
		<a href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706"><img src="img\Facebook_black" height="32px"></a>
		<a href="https://twitter.com/GoonSquad3604"><img src="img\twitter_black" height="32px"></a>
		<a href="http://www.youtube.com/user/WhsRobotics3604?feature=watch"><img src="img\youtube_black" height="32px"></a>
		</div>
	</body>
  </html>-->
		<div id="footer" style="margin-bottom: 128px; margin-left: 40px;" >
		<a style="text-decoration: none;" href="https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706">
			<img src="img/Facebook_black.png" height="64px">
		</a>
		<a style="text-decoration: none;" href="https://twitter.com/GoonSquad3604">
			<img src="img/twitter_black.png" height="64px">
		</a>
		<a style="text-decoration: none;" href="http://www.youtube.com/user/WhsRobotics3604?feature=watch">
			<img src="img/youtube_black.png" height="64px">
		</a>
		<br><br>&nbsp
		</div>
		<script type="text/javascript" src="http://wurfl.io/wurfl.js">
		</script>
		<script>
		if(WURFL.is_mobile === true && !(window.location.href.includes("mobile")))
		{
			var path = window.location.pathname.split("/");
			window.location.replace("mobile/" + path[path.length-1]);
		}
		else if(WURFL.is_mobile === false && (window.location.href.includes("mobile")))
		{
			var path = window.location.pathname.split("/");
			window.location.replace("../" + path[path.length-1]);
		}
		</script>