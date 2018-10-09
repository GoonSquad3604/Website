<html>
<head>
<title>3604</title>
<style>
a
{
	color: blue;
}
a:active
{
	color: red;
}
</style>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({
	selector: '#pageMcEdit',
	 theme: 'modern',
    width: 1280,
    height:300,
	content_css: "preview/style.css",
    plugins: [
         'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
         'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
         'save table contextmenu directionality emoticons template paste textcolor fullpage'
	],
	toolbar: 'fontselect fontsizeselect | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons | fullpage', 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Italic text', inline: 'i'},
        {title: 'Underlined text', inline: 'u'},
        {title: 'Header 1', block: 'h1', styles: {color: '#000000'}},
        {title: 'Header 2', block: 'h2', styles: {color: '#000000'}},
        {title: 'Header 3', block: 'h3', styles: {color: '#000000'}},
        {title: 'Header 4', block: 'h4', styles: {color: '#000000'}},
        {title: 'Header 5', block: 'h5', styles: {color: '#000000'}},
        {title: 'Header 6', block: 'h6', styles: {color: '#000000'}},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]});
</script>
</head>
<body style="font-family: sans-serif;">
<center>

<?php

include("io.inc.php");

session_start();

$mode = get('mode');
if(isset($_SESSION['session']) and $_SESSION['session']=="Developer")
{
	if($mode=="")
	{
		developer();
	}
	if($mode=="passreset")
	{
		passResetForm();
	}
	
	if($mode=="passresetactions")
	{
		passReset();
	}
	
	if($mode=="edit")
	{
		edit();
	}
	
	
	if($mode=="select")
	{
		selectAPage();
	}
	
	if($mode=="save")
	{
		save();
	}
	
	if($mode=="view")
	{
		viewAPage();
	}
	
	if($mode=="viewimg")
	{
		viewImage();
	}
	if($mode=="addform")
	{
		addForm();
	}
	
	if($mode=="addimage")
	{
		addImageForm();
	}
	
	if($mode=="deleteimgform")
	{
		deleteImageForm();
	}
	if($mode=="deleteimg")
	{
		deleteImage();
	}
	
	if($mode=="ai")
	{
		addImage();
	}
	
	if($mode=="add")
	{
		add();
	}
	if($mode=="deleteselect")
	{
		deleteSelect();
	}
	
	
	if($mode=="delete")
	{
		remove();
	}
	
	if($mode=="messages")
	{
		messages();
	}
	
	if($mode=="msend")
	{
		messagesSend();
	}
	
	if($mode=="msendform")
	{
		messagesSendForm();
	}
	
	if($mode=="mread")
	{
		messagesRead();
	}
	
	
}

if(isset($_SESSION['session']) and $_SESSION['session']=="Publisher")
{
	if($mode=="")
	{
		publisher();
	}
	if($mode=="passreset")
	{
		passResetForm();
	}
	
	if($mode=="passresetactions")
	{
		passReset();
	}
		
	if($mode=="view")
	{
		viewAPage();
	}
	
	if($mode=="viewimg")
	{
		viewImage();
	}
	
	if($mode=="messages")
	{
		messages();
	}
	
	if($mode=="msend")
	{
		messagesSend();
	}
	
	if($mode=="msendform")
	{
		messagesSendForm();
	}
	
	if($mode=="mread")
	{
		messagesRead();
	}
	
	if($mode=="publishform")
	{
		publishForm();
	}
	
	if($mode=="publish")
	{
		publish();
	}
	
}

if(!session('session'))
{
	home();
}
function developer()
{
	echo("<H1>Developer Backend</H1>Welcome, web developer. Select which task you want to do.
	<br><br><a href='?mode=passreset'>Reset Your Password</a>
	<br><br><a href='?mode=select'>Edit a Page</a>
	<br><br><a href='?mode=view'>View a Page</a>
	<br><br><a href='?mode=addform'>Add a Page</a>
	<br><br><a href='?mode=deleteselect'>Delete a Page</a>
	<br><br><a href='?mode=addimage'>Add an Image</a>
	<br><br><a href='?mode=viewimg'>View an Image</a>
	<br><br><a href='?mode=deleteimgform'>Delete an Image</a>
	<br><br><a href='?mode=messages'>Messages</a>
	<!--<br><br><a href='http://twitter.com/mario200k'>Annoy Mario200k on the Twitters</a>
	<br><br><a href='yes.JPG'>Enjoy a lit picture of a McDonalds cup with a home goods bag containing paint, as well as a plate, in the background.</a>-->
	<br><br><a href='logout.php'>Log Out</a>");
}
function publisher()
{
	echo("<H1>Publisher Backend</H1>Welcome, publisher. Select which task you want to do.
	<br><br><a href='?mode=passreset'>Reset Your Password</a>
	<br><br><a href='?mode=view'>View a Page</a>
	<br><br><a href='?mode=viewimg'>View an Image</a>
	<br><br><a href='?mode=publishform'>Publish the Site</a>
	<br><br><a href='?mode=messages'>Messages</a>
	<!--<br><br><a href='http://twitter.com/mario200k'>Annoy Mario200k on the Twitters</a>
	<br><br><a href='yes.JPG'>Enjoy a lit picture of a McDonalds cup with a home goods bag containing paint, as well as a plate, in the background.</a>-->
	<br><br><a href='logout.php'>Log Out</a>");
}
function passResetForm()
{
	echo("<H1>RESET PASSWORD</H1>
	<a href='?mode='>Go back</a><br><br>
	If anyone except you knows your password, <b>CHANGE IT NOW!</b><br>You may also change
	the password if you don't like your current one.<br>Make sure it is something you can remember,
	but difficult to guess.<br> When you change it, don't tell anyone what the new password is.<br>
	To reset your password, type your old password in the top box, the new password in bottom box, then click reset.
	<form action='?mode=passresetactions' method='post' id='resetpass'>
	<br>Old Password<br>
	<input type='password' id='code' name='code' />
	<br>
	<br>New Password<br>
	<input type='password' id='newcode' name='newcode' />
	<br>
	<br>
	<input type='submit' id='submit' value='Reset'/>
	</form>");
}
function addForm()
{
	echo("<H1>Add A Page</H1>
	<a href='?mode='>The site has enough pages already, thank you very much.</a><br><br>
	<form action='?mode=add' method='post' id='addpage'>
	<br>Page Title<br>
	<input type='text' id='name' name='name' />
	<br>
	<br>
	<input type='submit' id='submit' value='Go'/>
	</form>");
}

function passReset()
{
	$oldcode =addslashes($_POST['code']);
	$newcode = addslashes($_POST['newcode']);
	$sql = "SELECT * FROM `codes` WHERE Type = '{$_SESSION['session']}' AND Code = '{$oldcode}' ORDER BY ID asc";
	$db = connect();
	$result = $db->query($sql);
	$data = $result->fetch_assoc();
	if($data!=null)
	{
		$sql2 = "UPDATE `codes` SET Code = '{$newcode}' WHERE Type = '{$_SESSION['session']}'";
		$result = $db->query($sql2);
		
		echo("Your password has been reset!<br><H1><a href='?mode='>Continue</a></H1>");
	}
	else
	{
		echo("Incorrect Password.<br><H1><a href='?mode='>Continue</a></H1>");
	}
}

function add()
{
	$name = addslashes($_POST['name']);
	$default = addslashes("
	<html>
	<head>
		<title>Goon Squad - Home</title>
		<link rel='stylesheet' type='text/css' href='style.css'/>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet'> 
		<link href='goonfont.ttf' rel='stylesheet'> 
		
	</head>
	
	<body>
		<div class='header'>
		
			<a href='index.html'><img src='img/logo.png'></a>
			<div class='menu'>
			<font align='right'>
			<a href='index.html' id='currentpage'>Home</a>
			<a href='sponsors.html'>Sponsors</a>
			<a href='contact.html'>Contact</a>
			<a href='links.html'>Links</a>
			<a href='calendar.html'>Calendar</a>
			<a href='news.html'>News</a>
			</font>
			</div>
		</div>
		<div class='footer'>
		<a style='text-decoration: none;' href='https://www.facebook.com/pages/Woodhaven-Robotics-Team-3604/167378876696706'><img src='img/icons/Facebook.png'></a>
		<a style='text-decoration: none;' href='https://twitter.com/GoonSquad3604'><img src='img/icons/Twitter.png'></a>
		<a style='text-decoration: none;' href='http://www.youtube.com/user/WhsRobotics3604?feature=watch'><img src='img/icons/YouTube.png'></a>
		</div>
		<div class='content' id='homecontent'>
		
		</div>
		<script>
		
		</script>
	</body>
</html>");
	$sql = "INSERT INTO `pages` (name,content) VALUES ('{$name}','{$default}')";
	
	$db = connect();
	$db->query($sql);
	echo("<H1>SUCCESS</H1><br><br><a href='?'>Go back to the home page, presumably to edit your new page.</a>");
}
function home()
{
	echo("
	<H1>Goon Squad</H1>
	<H2>Team 3604</H2>
	<H3>Enter Code:</H3>
	<form action='submit.php' method='post' id='inputcode'>
	<input type='password' id='code' name='code' />
	<br>
	<input type='submit' id='submit' value='Go'/>
	</form>
	");
	$sql = "SELECT * FROM `codes` WHERE Type = 'Developer' ORDER BY ID asc";
	$db = connect();
	$result = $db->query($sql);

}
function edit($page='')
{
	
	$sql = "SELECT * FROM `images`";
	$db = connect();
	$result = $db->query($sql);
	
	$page = get('id');
	$page_query = addslashes($page);
	$sql = "SELECT * FROM `pages` WHERE name = '{$page_query}'";
	$db = connect();
	$result = $db->query($sql);
	$page_data = $result->fetch_assoc();
	echo(
	"<H1>Editing {$page_query}</H1>
	<a href='?mode='>I don't know how to do this... (or I don't want to do this)</a><br><br>
	<form action='?mode=save&id={$page_query}' method='post' id='saving'>
	<textarea id='pageMcEdit' name='pageMcEdit'>{$page_data['content']}</textarea>
	<input type='submit' id='submit' value='Save'/>
	"
	);
	
}
function selectAPage()
{
	echo("<H1>Select a Page to Edit</H1>
	<a href='?'>I actually don't want to</a><br><br>");
	
	$sql = "SELECT * FROM `pages`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		echo("<h3><a href='?mode=edit&id={$page_data['name']}'>{$page_data['name']}</a></h3>");
		
	}
}
function deleteSelect()
{
	echo("<H1>Select a Page to Delete</H1>
	<b>WARNING: THIS CANNOT BE UNDONE!<br><br><i>EVER!!!</i></b><br><br>
	<a href='?'>Return to another white screen with blue links, but it is a different white screen with different blue links.</a><br><br>");
	
	$sql = "SELECT * FROM `pages`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		echo("<h3><a href='?mode=delete&id={$page_data['name']}'>{$page_data['name']}</a></h3>");
		
	}
}
function viewAPage()
{
	echo("<H1>Select a Page to View</H1><a href='?'>Back to Homepage</a><br><br><b>WARNING: The preview pages don't have a back button on them. If your browser doesn't have a back button on it for some
	strange reason, upgrade your browser before viewing any of these pages.</b><br><br>
	");
	
	$sql = "SELECT * FROM `pages`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		echo("<h3><a href='preview/{$page_data['name']}.html'>{$page_data['name']}</a></h3>");
		
	}
}
function viewImage()
{
	echo("<H1>Select an Image to View</H1><a href='?'>Back to Homepage</a><br><br><b>WARNING: The preview images don't have a back button on them. If your browser doesn't have a back button on it for some
	strange reason, upgrade your browser before viewing any of these images.</b><br><br>
	");
	
	$sql = "SELECT * FROM `images`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		$loc = substr($page_data['location'],8);
		echo("<h3><a href='{$page_data['location']}'>{$page_data['name']}</a></h3>{$loc}<br>");
		
	}
}
function deleteImageForm()
{
	echo("<H1>Select an Image to Delete</H1><a href='?'>Spare these innocent (or not) images.</a><br><br><b>WARNING: WHEN YOU DELETE AN IMAGE, IT IS GONE FOREVER. DO NOT DELETE ANY OF THESE
	IMAGES IF YOU ACTUALLY NEED THEM, OR WILL NEED THEM IN THE FUTURE!</b><br><br>
	");
	
	$sql = "SELECT * FROM `images`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		$loc = substr($page_data['location'],8);
		echo("<h3><a href='?mode=deleteimg&id={$page_data['name']}'>{$page_data['name']}</a></h3>{$loc}<br>");
		
	}
}
function addImageForm()
{
	echo("<H1>Image Uploader</H1><a href='?'>Escape</a><br><br>Here is where you can upload an image, as this is the image uploader.<br><br>
	
	<form action='?mode=ai' method='post' id='addimg' enctype='multipart/form-data' >
	Name:<br>
	<input type='text' id='name' name='name'/>
	<br><br>
	File:<br>
	<input type='file'  id='image' name='image' accept='.png'/>
	<br><br>
	<input type='submit' value='Upload'/>
	</form>
	");
}
function addImage()
{
	
	while($page_data = $result->fetch_assoc())
	{
		$loc = substr($page_data['location'],8);
		copy($page_data['location'],$loc);
	}
	$name = addslashes($_POST['name']);
	$image = $_FILES['image'];
	$upload = "preview/img/" . basename($_FILES["image"]["name"]);
	$file = fopen($upload,"w");
	fwrite($file," ");
	fclose($file);
	move_uploaded_file($_FILES["image"]["tmp_name"],$upload);
	$sql = "INSERT INTO `images` (name,location) VALUES ('{$name}','{$upload}')";
	$db=connect();
	$db->query($sql);
	echo("<H1>SUCCESS</H1><br><a href='?'>Move on with your life.</a>");
}
function save($page='')
{
	$content = addslashes($_POST['pageMcEdit']);
	$content2 = $_POST['pageMcEdit'];
	$page = get('id');
	$page_query = addslashes($page);
	$sql = "UPDATE `pages` SET content = '{$content}' WHERE name = '{$page_query}'";
	$db=connect();
	$db->query($sql);
	$file = fopen("preview/{$page_query}.html","w");
	fwrite($file,$content2);
	fclose($file);
	echo("
	<H1>SUCCESS!</H1>
	Your page has been updated.
	<br><br>
	<a href='?'>Continue</a>
	");
}

function publish()
{
	$sql = "SELECT * FROM `pages`";
	$db = connect();
	$result = $db->query($sql);
	while($page_data = $result->fetch_assoc())
	{
	$file = fopen("../{$page_data['name']}.html","w");
	fwrite($file,$page_data['content']);
	fclose($file);
	}
	
	$sql = "SELECT * FROM `images`";
	$db = connect();
	$result = $db->query($sql);
	while($image_data = $result->fetch_assoc())
	{
		copy($image_data['location'],"../".substr($image_data['location'],8));
	}
	echo("
	<H1>SUCCESS!</H1>
	The Goon Squad Website has been published.
	<br><br>
	<a href='?'>Continue</a>
	<br><br>
	<a href='../'>View The Site</a>
	");
}

function messagesSend($page='')
{
	$content = addslashes($_POST['text']);
	$name = addslashes($_POST['name']);
	$content2 = $_POST['text'];
	if($_SESSION['session']=="Publisher")
	{
	$sql = "INSERT INTO `messages` (name,text,sender,receiver) VALUES ('{$name}','{$content}','Publisher','Developer')";
	$db=connect();
	$db->query($sql);
	}
	if($_SESSION['session']=="Developer")
	{
	$sql = "INSERT INTO `messages` (name,text,sender,receiver) VALUES ('{$name}','{$content}','Developer','Publisher')";
	$db=connect();
	$db->query($sql);
	}
	echo("
	<H1>SUCCESS!</H1>
	Your message has been sent.
	<br><br>
	<a href='?mode=messages'>Continue</a>
	");
}
function remove($page='')
{
	$page = get('id');
	$sql = "DELETE from `pages` WHERE name = '{$page}'";
	$db = connect();
	$db->query($sql);
	unlink("preview/{$page}.html");
	echo("<H1>SUCCESS</H1><br><br><a href='?'>Attempt to go on living knowing that you just killed an innocent webpage, you monster.</a>");
}
function deleteImage($page='')
{
	
	$page = addslashes(get('id'));
	
	$sql = "SELECT * FROM `images` WHERE name = '{$page}'";
	$db = connect();
	$result = $db->query($sql);
	$page_data = $result->fetch_assoc();
	echo($page_data['location']);
	//unlink("{$page_data['location']}");
	
	$sql = "DELETE from `images` WHERE name = '{$page}'";
	$db = connect();
	$db->query($sql);
	echo("<H1>SUCCESS</H1><br><br><a href='?'>Attempt to go on living knowing that you just killed an innocent image, you monster.</a>");
}

function messages()
{
	echo("<H1>Select a Message to Read</H1><a href='?'>Back to Homepage</a><br><br><b><a href='?mode=msendform'>Send a Message</a></b><br><br>");
	$sql = "SELECT * FROM `messages` WHERE receiver = '{$_SESSION['session']}'  ORDER BY id DESC";
	$db = connect();
	$result = $db->query($sql);
	while($message_data = $result->fetch_assoc())
	{
		echo("<a href='?mode=mread&id={$message_data['id']}'<b>{$message_data['name']}</b></a><br>From: {$message_data['sender']}<br><br>");
	}
}
function messagesRead()
{
	$id = addslashes(get('id'));
	$sql = "SELECT * FROM `messages` WHERE receiver = '{$_SESSION['session']}' AND id = {$id}";
	$db = connect();
	$result = $db->query($sql);
	while($message_data = $result->fetch_assoc())
	{
	echo("<H1>{$message_data['name']}</H1><a href='?mode=messages'>Back</a><br>From: {$message_data['sender']}<br><br>");
		echo("{$message_data['text']}");
	}
}
function messagesSendForm()
{
	echo("
	<h1>Send a Message</h1><br><a href='?mode=messages'>Go Back</a><br><br>
	<form action='?mode=msend' method='post' id='saving'>
	Message Name:<br><br>
	<input type='text' name='name' id='name'>
	<br><br>
	Content:<br><br>
	<textarea name='text' id='text'></textarea>
	<br><br>
	<input type='submit' id='submit' value='Send'/>
	</form>
	");
}
function publishForm()
{
	echo("<H1>Publish Website</H1><a href='?'>Back to Homepage</a><br><br>Make sure all the pages look the way you want before publishing.<br><br><b>WARNING: The preview pages don't have a back button on them. If your browser doesn't have a back button on it for some
	strange reason, upgrade your browser before viewing any of these pages.</b><br><br><h1><a href='?mode=publish'>Publish</a></h1><br><br>
	");
	
	$sql = "SELECT * FROM `pages`";
	$db = connect();
	$result = $db->query($sql);
	
	while($page_data = $result->fetch_assoc())
	{
		echo("<h3><a href='preview/{$page_data['name']}.html'>{$page_data['name']}</a></h3>");
		
	}
	
}
?>
</center>
</body>
</html>