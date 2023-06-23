<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
	<title>Signup</title>
</head>

<h3>
        <img src="pictures/ıztech_logo.png" alt="Iztech Logo" width="120" height="120">
        <a href="#" style="float:right;text-align:right;margin-left: 80px;"><a class="brand">IZTECH Forum</i></a></a>
</h3>

<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: red;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			Name:<input id="text" type="text" name="user_name"><br><br>
			Password:<input id="text" type="password" name="password"><br><br>
			Mail:<input id="text" type="text" name="user_mail"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>
			<tr><td><a href="login.php" style="color:black;"> Click to Login </a></td></tr>
		</form>
	</div>
</body>

<footer>
    <span>&copy; &nbsp;Copyright Muammer TARHAN - 2022</span>
</footer>

</html>