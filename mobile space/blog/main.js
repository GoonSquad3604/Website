function toggleNav()
{
	//document.getElementById("nav-sidebar").style.visibility = "hidden";
	//document.getElementById("nav-sidebar").style.backgroundColor = "purple";
   var x = document.getElementById("nav-sidebar");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
	//boolean toggleNavStatus = false;
	//document.getElementById("nav-sidebar").style.backgroundColor = "purple";
	//document.getElementById("nav-sidebar").style.visibility = "hidden";
	/*var getSidebar = document.querySelector(".nav-sidebar");
	var getSidebarU1 = document.querySelector(".nav-sidebar ul");
	var getSidebarTitle = document.querySelector(".nav-sidebar span");
	var getSidebarLinks = document.querySelectorAll(".nav-sidebar a");
	
	if (toggleNavStatus === false){
		getsidebar.style.width = "272px";
		getSidebarTitle.style.opacity = "0.5";
		
		var arrayLength = getSidebarLinks.length;
		for (var i = 0; i < arrayLength; i++) 
		{
		  getSidebarLinks[i].style.opacity = "1";
			
		}
		
		toggleNavStatus = true;
	}*/
}