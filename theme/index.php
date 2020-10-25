<!DOCTYPE html>
<html lang="en" >
	<head>
		<!-- Meta setup -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="">
		<meta name="decription" content="">
		<meta name="author" content="Devcorn">
		
		<!-- Title -->
		<title>PaccoSpedito</title>
		
		<!-- Fav Icon -->
		<link rel="icon" href="img/fav.png" />	
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" />	
	</head>

	<body style="background-color: #202329; height: 100vh;">
		<div style="min-height: 100vh;display: flex;align-items: center;justify-content: center;">
			<div class="login">
				<img src="img/logo.png">
				<hr>
				<h1 style="text-align: center;">Login</h1>
				<form control="" action="users.php">
					<span><i class="material-icons md-18">face</i></span>
					<input type="text" name="username" placeholder="Email">
					<span class="lock-icon"><i class="material-icons md-18">lock</i></span>
					<input type="password" name="password" placeholder="Password">
					<input type="hidden" name="_token" value="ds0wWUKvfGqz78AV543kC4Cgtk3zuHgW0LBQDSJB">
					<button type="submit">Login</button>
					<a href="forgot-password.php">Forgot password?</a>
				</form>
			</div>
		</div>
	</body>
</html>
