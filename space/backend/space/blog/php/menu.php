
<div id="menu">
	<center><img src="img/logo.png" width="100%"><br>
	<span id="sidebartitletext">Team 3604<br>Woodhaven, MI</center>
	<br>
		<?php
		$menu_file = fopen("txt/pages.txt",'r');
		$file_groups = array();
		$i = 0;
		while($ln = fgets($menu_file))
		{
			array_push($file_groups,$ln);
		}
		fclose($menu_file);
		foreach($file_groups as $current_group)
		{
			$data = explode("|",$current_group);
			print("<p class='link'><a class='anchor' href='{$data[0]}'onmouseover='mouseOver({$i})' onmouseout='mouseOut({$i})'>{$data[1]}</a><span class='rectangle'></span></p>");
			/*
			if($data[0] == basename($_SERVER['PHP_SELF']))
			{
				print("<p id='currentpage'>{$data[1]}</p>");
			}
			else
			{
				print("<p><a href='{$data[0]}'>{$data[1]}</a></p>");
			}
			*/
			$i++;
		}
	?>
</div>
<div id="line"></div>