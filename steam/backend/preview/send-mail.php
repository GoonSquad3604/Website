<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$body = $_POST['body'];
	$updates = $_POST['updates'];
	
	if(strpos($email,'@')!=false && $name!="" && $email!="" && $subject!="" && $body!="")
	{
		$email = str_replace('\r','',$email);
		$email = str_replace('\n','',$email);
		$email = str_replace('0x0D','',$email);
		$email = str_replace('0x0A','',$email);
		if(strpos($email,'.')!=false && strpos($email,' ')==false)
		{
			include("thankyou.html");
			if($updates)
			{
				$send = sprintf("%s %s %s %s %s %s","SENT BY",$name," at ",$email, $body, "!!THIS PERSON WANTS TO RECIEVE UPDATES!!");
		
			}
			else
			{
				$send = sprintf("%s %s %s %s %s","SENT BY",$name,"at",$email, $body);
			}
			//echo($send);
			mail("whs.robotics.3604@gmail.com",$subject,$send,sprintf("%s %s","From: ", $email));
		}
		else
		{
			include("fail.html");
		}
	}
	else
	{
		include("fail.html");
	}
	
?>
