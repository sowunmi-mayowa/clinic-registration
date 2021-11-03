<?php 
    require 'connection.php';
    require 'registration.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <style type="text/css">
    	body{
    		background-image: linear-gradient(50deg ,skyblue, dodgerblue);
    		height: 100vh;
    	}
    </style>
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-4">School clinic registration</h1>
			<div class="d-flex flex-column justify-content-center align-items-center">
				<form method="POST">
					<div class="form-group">
						<label>Email: </label>
						<input type="text" name="email" class="form-control mb-2" placeholder="Email Address" required="">
						<label>Matric Number: </label>
						<input type="text" name="matric-number" class="form-control mb-2" placeholder="N/CS/20/2123">
						<label>Password</label>
						<input type="password" name="password" class="form-control mb-2" placeholder="password">
						<button type="submit" name="submit" class="btn btn-block btn-success">Submit</button>
					</div>
				</form>
			</div>
			<p>Do you have an account <a href="login.php">Sign In</a></p>
	</div>
</body>
</html>