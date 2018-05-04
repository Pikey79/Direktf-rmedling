<?php
include("loginserv.php")
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
	
	.login {
		width: 360px;
		margin: 50px auto;
		border: 1px solid #ddd;
		padding: 10px 40px 25px;
		margin-top: 70px;
		background: #fafafa;
	}

	input[type=text], input[type=password] {
		width: 99%;
		padding: 10px;
		margin-top: 8px;
		border: 1px solid #ddd;
		padding-left: 5px;
		font-size: 16px;
	}

	input[type=submit] {
		width: 100%;
		background: #f39231;
		color: #fff;
		padding: 10px;
		font-size: 20px;
		cursor: pointer;
		margin-bottom: 15px;
		border: none;
	}

	input[type=submit]:hover {
		background: #da832c;
	}

	</style>
</head>
<body>
<div class="login">
	<h1 align="center">Logga in</h1>
	<form action="" method="post" style="text-align: center">
		<input type="text" placeholder="Användarnamn" id="user" name="user"><br/><br/>
		<input type="password" placeholder="Lösenord" id="pass" name="pass"><br/><br/>
		<input type="submit" value="Logga in" name="submit">
		<span><?php echo $error; ?></span>
	</form>
</div>
</body>
</html>