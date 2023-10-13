

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Document</title>
	<style>
		/* * {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		} */

		.main {
			min-height: 600px;
			width: 100%;
		

		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.container {
			display: flex;
			flex-direction: column;
			width: 25vw;
			margin-top: 10px;
		}

		h1,
		p {
			text-align: center;
		}

		input {
			margin: 0.25em 0em 1em 0em !important;
			outline: none;
			padding: 0.5em;
			border: none;
			background-color: rgb(225, 225, 225);
			border-radius: 0.25em;
			color: black;
		}

		button {
			padding: 0.75em;
			border: none;
			outline: none;
			background-color: rgb(68, 18, 232);
			color: white;
			border-radius: 0.25em;
		}

		button:hover {
			cursor: pointer;
			background-color: rgb(41, 4, 164);
		}
	</style>
</head>
<?php
	// include ('index.php')
	?>
<body>
	
	<div class="main">
		<div class="form">

			<form action="logindb.php" method="post">
				<div class="container">
					<h1>login</h1>
					<p>Kindly fill in this form to login.</p>

					<label for="email"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="email" id="email" required />

					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" id="pwd" required />

					

					<button type="submit" style="color:white;">Login</button>
				</div>

				<div>
					<p>first create user  account? <a href="register.php">REGISTRATION</a>.</p>
				</div>
			</form>
		</div>
	</div>
</body>

</html>