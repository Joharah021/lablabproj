
<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="stylesheet" href="sign.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8">
</head>
<body>

	<div class="menu">
	<a href="home.php">About</a>
	<a href="login.inc.php">Login</a>
	<a href="signup.inc.php" style="float:right"> SIGNUP </a>
	</div>

  <div class="hero"></div>
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

				//read from database
				$query = "select * from users where user_name = '$user_name' limit 1";
				$result = mysqli_query($con, $query);

				if($result)
				{
					if($result && mysqli_num_rows($result) > 0)
					{

						$user_data = mysqli_fetch_assoc($result);

						if($user_data['password'] === $password)
						{

							$_SESSION['user_id'] = $user_data['user_id'];
							header("Location: success.php");
							die;
						}
					}
				}

				echo "<p class='error'> wrong username or password!</p>";
			}else
			{
				echo "<p class=''error'> wrong username or password!</p>";
			}
		}

	?>
  <div class="form-box">
      <h> Login </h>
    <div class="button-box">
      <div id="bnt">


    <form

		id="login" class="input-group" action="login.inc.php" method="post">
      <input type="text" class="input-field" name="user_name"placeholder="Enter Username" required>
      <input type="password" class="input-field" name="password"placeholder="Enter Password" required>
      <button type="submit" class="submit-btn">Login</button>

    </form>



</body>
</html>
