		<div id="menuclosed">
		<img onclick="openMenu()" style="padding-top: 20px;" align="left" src="img/menuicon.png"></img><center style="font-size: 36pt;">
		<img src="img/logo.png" height="64px" style="margin-right: 16px;">GOON SQUAD</center>
		</div>
		<div id="menu">
			<img id = "CloseMenu" style="padding-top: 20px" onclick="closeMenu()" src="img/close.png"></img>
			<div id="menutext">
				<?php
				$menu_file = fopen("txt/pages.txt",'r');
				$file_groups = array();
				while($ln = fgets($menu_file))
				{
					array_push($file_groups,$ln);
				}
				fclose($menu_file);
				foreach($file_groups as $current_group)
				{
					$data = explode("|",$current_group);
					if($data[0] == basename($_SERVER['PHP_SELF']))
					{
						print("<p id='currentpage'>{$data[1]}</p>");
					}
					else
					{
						print("<p><a href='{$data[0]}'>{$data[1]}</a></p>");
					}
				}
				?>
				<!--
				<p><a href="calendar.php">Calendar</a></p>
				<p><a href="contact.php">Contact</a></p>
				<!--<p><a href="news.php">News</a></p>
				<p><a href="/pictures/index.php">Pictures</a></p>-->
			</div>
		</div>