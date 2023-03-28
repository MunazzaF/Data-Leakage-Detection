
<!DOCTYPE html>
<html>
<head>
	<title>Data Leakage Detection</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			flex-wrap: wrap;
			min-height: 100vh;
			font-family: Arial, sans-serif;
		}
        body1 {
            text-align: center;
        }

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
			width: 100%;
			margin-bottom: 20px;
		}

		nav {
			background-color: #f2f2f2;
            text-align: left;
			flex: 0 0 20%;
			padding: 20px;
		}

		nav ul {
			list-style-type: none;
            text-align: left;
			padding: 0;
		}

		nav li {
			margin-bottom: 10px;
            text-align: left;
		}

		nav a {
			color: #333;
			display: block;
			text-decoration: none;
			padding: 10px;
            text-align: left;
		}

		nav a:hover {
			background-color: #ddd;
            text-align: left;
		}

		main {
			flex: 0 0 80%;
			padding: 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>
</head>


<body>
	<header>
		<h1>Data Leakage Detection</h1>
	</header>
    <nav>
		<ul>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Logout</a></li>
		</ul>
		<br>
		<button class="button">Check for Data Leaks</button>
	</nav>
</body>
<body1>
    <main>
		<h2>Welcome, User!</h2>
		<p>Your user statistics:</p>
		<ul>
			<li>50% of your data has been compromised</li>
			<li>2 out of 4 data types have been leaked</li>
		</ul>
	</main>
</body1>
</html>

<?php
// The email address or username to check
$email = "email";

// The URL of the Have I Been Pwned API endpoint
$url = "https://haveibeenpwned.com/api/v3/breachedaccount/" . urlencode($email);

// Sets up the cURL request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Data Leakage Detection",
    "hibp-api-key: $(cat /.hibp.secret) "
]);

// Sends the request and decode the response
$response = curl_exec($ch);
$data = json_decode($response, true);

// Checks if the email address has been compromised
if (!empty($data)) {
    echo "Your email address has been compromised in the following data breaches:";
    foreach ($data as $breach) {
        echo "- " . $breach["Name"] . " (" . $breach["BreachDate"] . ")\n";
    }
} else {
    echo "Your email address has not been compromised in any known data breaches.";
}

// Cleans up the cURL request
curl_close($ch);
?>


