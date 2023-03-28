<!DOCTYPE html>
<html>
<head>
	<title>Data Leakage Detection</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			margin: 0 auto;
			width: 400px;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px #999;
			border-radius: 5px;
			margin-top: 50px;
		}

		h1 {
			text-align: center;
			margin-top: 0;
		}

		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border-radius: 3px;
			border: none;
			box-shadow: 0px 0px 5px #ccc;
		}

		input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		form p {
			margin-top: 0;
		}

		form span {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Data Leakage Detection</h1>
		<form action="homepage.php" method="post" >
			<p>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" value="Login">
                <form class="form-signin" method="post" action="index.html">

			</p>
		</form>
		<hr>
		<form action="signup.php" method="post">
			<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
			</p>
			<p>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" value="Sign up">
			</p>
		</form>
	</div>
</body>
</html>
