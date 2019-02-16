
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
			if(isset($thisPage) && $data[0] == $thisPage)
			{
				print("<li><span id='home'><b>{$data[1]}</b></span></li>");
			}
			else
			{
				print("<li><a href='{$data[0]}'>{$data[1]}</a></li>");
			}
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