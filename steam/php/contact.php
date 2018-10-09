<?php include("header.php");?>
		<div class="content">
		<table>
		
		<tr>
		<td width="30%"  rowspan="2">
		<br><br>
		<form action="send-mail.php" method="post" id="contact" name="contact">
		<b>Name:</b><br>
		<input type="text" name="name"/>
		<br>
		<b>Email:</b><br>
		<input type="text" name="email"/>
		<br>
		<b>Subject:</b><br>
		<input type="text" name="subject"/>
		<br>
		<b>Body:</b><br>
		<textarea name="body" form="contact"></textarea>
		<br>
		<input type="checkbox" name="updates"/>Check this box to recieve email updates
		<br>
		<input type="submit" value="Send" name="send">
		</form>
		<br>&nbsp
		</td>
		<td>
		
		 <h1>Contact the Goon Squad</h1>
		If you would like to contact the Goon Squad, please send us an email!  We will get back to you as soon as we can!  
		If you do not receive a response within 72 hours, please just send another email.
		
		</td>
		</tr>
		<tr>
		<td width="40%">
		
		</td>
		</tr>
		</table>
		</div>
	</body>
</html>