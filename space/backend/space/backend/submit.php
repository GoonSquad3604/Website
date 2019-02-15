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
		session_start();
		include("io.inc.php");

		$sql = "SELECT * FROM `codes` WHERE Type = 'Developer' ORDER BY ID asc";
		$db = connect();
		$result = $db->query($sql);
		$data = $result->fetch_assoc();
		if($data['Code']==$_POST['code'])
		{
			setSession('session', 'Developer');
			echo("<script>
			document.body.style.backgroundColor = '004c07';
			</script>");
			echo("Logged in as: ");
			echo(session('session'));
			echo("<br><h2><a href='index.php'>Click to Continue</a>");
		}
		else
		{
			
			echo("<script>
			document.body.style.backgroundColor = '680100';
			</script>");
			echo("<h1>Incorrect Access Code</h1>
			The access code you typed is invalid. This may be because you incorrectly typed in the code,
			or the code may have expired.<br><br><a href='index.php'>Back</a>");
		}?>
		</div>
	</center>
	</body>
</html>