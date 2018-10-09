	var menuWidth = 0;
	var interval;
	var otherInterval = 0;
	var textvar = 0;
	var hide = 0;
	var x = 0;
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
	function hideVideo()
	{
	
		document.getElementById("video").style.display = "none";
		document.getElementById("video").stop();
	}
	function hideText()
	{
		scrollInterval = setInterval(scroll,10);
		if(screen.width <= 1024)
		{
			hide = 1;
		}
		if(hide == 1)
		{
			hideVideo();
		}
		if(hide != 1)
		{
		document.getElementById("pad").style.display = "none";
		}
		document.getElementById("toptext").style.opacity = "0";
		document.getElementById("toptext").style.display = "none";
		otherInterval = setInterval(showText,1);
		document.getElementById("homepageVid").play();
	}
	function showText()
	{
		textvar++;
		
		if(textvar >= 200)
		{
				document.getElementById("toptext").style.display = "block";
		}
		if(textvar >= 1000)
		{
			document.getElementById("toptext").style.opacity = "1";
		}
		if(textvar >= 1400)
		{
			document.getElementById("scrolldown").style.opacity = "1";
			clearInterval(otherInterval);
		}
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
	
	window.onscroll = function(e)
	{
		if(window.scrollY != 0)
		{
		
			document.getElementById("homepageVid").pause();
			document.getElementById("toptext").style.display = "block";
			document.getElementById("toptext").style.opacity = "1";
			document.getElementById("scrolldown").style.opacity = "1";
		}
		else if(hide != 1)
		{
			document.getElementById("homepageVid").play();
		}
	}
