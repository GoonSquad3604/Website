function mouseOver(i) 
{
		var rectangle = document.getElementsByClassName("rectangle");   
		var anchor = document.getElementsByClassName("link"); 
		rectangle[i].style.width = "128px";
		document.getElementsByClassName("anchor")[i].style.color = "black";
		rectangle[i].style.marginTop = "-21px";
}
function mouseOut(i) 
{
	if(navigator.appVersion.includes("Chrome"))
	{
		var rectangle = document.getElementsByClassName("rectangle");
		var anchor = document.getElementsByClassName("link");
		document.getElementsByClassName("anchor")[i].style.color = "white";
		rectangle[i].style.width = "4px";
		rectangle[i].style.marginTop = "-6px";
	}
	else
	{
		var rectangle = document.getElementsByClassName("rectangle");
		var anchor = document.getElementsByClassName("link");
		document.getElementsByClassName("anchor")[i].style.color = "white";
		rectangle[i].style.width = "4px";
		rectangle[i].style.marginTop = "-3.9px";
	}
	
}
document.getElementById("homepageVideo").play();