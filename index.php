<!DOCTYPE html>
<html lang="se">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<title>Litel hemlig hemsid</title>
	<style>
	main, head {
		font-family: 'Permanent Marker', cursive;
		width: 80%;
		margin: 0px auto,
	}
	</style>
</head>
<body>
<main>
	<h1>Vålkamen</h1>
	<form action="login.php" method="POST">
		<fieldset>
			<legend>Logga in</legend>
			<p>
				<label for="username">Användarnamn: </legend>
				<input type="text" name="username" id="username">
			</p>
			<p>
				<label for="password">Lösenord: </label>
				<input type="password" name="password" id="password">
			</p>
			<p>
				<input type="submit" name="submit" id="submit" value="Logga in">
			</p>
		</fieldset>
	</form>	
</main>

</body>
</html>