<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/main.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<title>Toggle password visibility</title>
	</head>
	<body>
		<form class="container">
			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input type="text" name="email" class="input-field " placeholder="loremipsum@example.com"/>
			</div>
			<div class="input-container">
				<i class="fa fa-key icon"></i>
				<input type="password" name="password" id="password" class="input-field" placeholder="***********" />
				<i class="fa fa-eye icon" id="togglePassword"></i>
			</div>
			<div class="input-container">
				<button type="button" class="btn">Register</button>
			</div>
		</form>
		<script src="js/main.js">
		</script>
	</body>
</html>