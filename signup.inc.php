<?php
session_start();

	include("connection.php");
	include("function.php");




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

			header("Location: login.inc.php");
			die;
		}
		$query = "select * from users where user_name = '$user_name'";
		$result = mysqli_query($con, $query);

			if(mysqli_num_rows($query) > 0)
			{
				echo "username exist";
			}

		else
		{
			echo "Please enter some valid information!";
		}

}
?>

<!DOCTYPE html>
<html>
<title>Sigunup</title>
<link rel="stylesheet" href="sign.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
</head>
<body>

	<div class="menu">
	<a href="home.php">About</a>
	<a href="login.inc.php">Login</a>
	<a href="signup.inc.php" style="float:right"> Register </a>
	</div>

  <div class="hero"></div>
  <div class="form-box">
      <h1> Register </h1>
    <div class="button-box">
      <div id="bnt">

        <form id="register" class="input-group" method="post">
            <input type="text" class="input-field" name="user_name"placeholder="Enter Username" required>
            <input type="email" class="input-field" placeholder="Enter Email" required>
          <input type="password" class="input-field" name="password"placeholder="Enter Password" required>
          <button type="submit" class="submit-btn">Register</button>
        </form>


</body>
</html>
