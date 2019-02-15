<html>
	<head>
		<?php
		function downloadSite()
		{
			shell_exec("git init");
			shell_exec("git config core.sparsecheckout true");
			shell_exec("echo space/ >> .git/info/sparse-checkout");
			shell_exec("git remote add -f origin https://github.com/GoonSquad3604/Website.git");
			shell_exec("git pull origin master");
		}
		?>
		<title>Goon Squad - Developer Backend</title>
		<style>
			body{
				font-family: sans-serif;
				background-color: #8342f4;
				color: white;
			}
			#content{
				background-color: white;
				width: 75%;
				color: black;
				background-color: white;
				padding: 16px;
			}
			
			a
			{
				color: blue;
			}
			a:active
			{
				color: red;
			}
		</style>
	</head>
	<body>
	<center>
			<H1>Goon Squad - Website Division</H1>
			<H2>Team 3604</H2>
		<div id="content">
			<?php
			include("io.inc.php");	
			session_start();

			$mode = get('m');
			if(isset($_SESSION['session']) and $_SESSION['session']=="Developer")
			{	
				if($mode=="")
				{
					developer();
				}
				if($mode=="logout")
				{
					logout();
				}
				if($mode=="update")
				{
					update();
				}
				if($mode=="copy")
				{
					doCopy();
				}
			}
			if(!session('session'))
			{
				home();
			}
			function update()
			{
				downloadSite();
				displayGoBack();
			}
			function doCopy()
			{
				recurse_copy("space","../");
				displayGoBack();
			}
			
			function home()
			{
				echo("
				Enter your access code below.<br>If you found yourself here by mistake, click <a href='../'>here.</a><br><br>
				<form action='submit.php' method='post' id='inputcode'>
				<input type='password' id='code' name='code' />
				<br>
				<input type='submit' id='submit' value='Go'/>
				</form>");
			}
			function developer()
			{
				echo("<a href='?m=update'>Download Site From GitHub</a><br><br>");
				echo("<a href='?m=copy'>Copy Downloaded Site To Actual Site</a><br><br>");
				echo("<a href='?m=logout'>Log Out</a>");
				echo("<script>
				document.body.style.backgroundColor = '005b82';
				</script>");
			}
			function logout()
			{
				setSession('session',null);
				return ("");
			}
			function recurse_copy($src,$dst) 
			{ 
				$dir = opendir($src); 
				@mkdir($dst); 
				while(false !== ( $file = readdir($dir)) ) 
				{ 
					if (( $file != '.' ) && ( $file != '..' )) 
					{ 
						if ( is_dir($src . '/' . $file) ) 
						{ 
							recurse_copy($src . '/' . $file,$dst . '/' . $file); 
						} 
						else 
						{ 
							copy($src . '/' . $file,$dst . '/' . $file); 
						}
					}
				} 
			closedir($dir); 
			} 
			
			function displayGoBack()
			{
				echo("<h1>Task Performed!</h1>");
				echo("<a href='?m'>Go Back!</a>");
			}
			
			?>
		</div>
	</center>
	</body>
</html>