<?php 
	require_once('connection.php');
	$email = $password = $pwd = '';
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pwd = $_POST['password'];
	 	$password = md5($pwd);

	 	if (!isset($_POST['email']) ||empty( $_POST['email'] )) {
            echo "email is required";
            exit();
        }
        if (!isset($_POST['password']) ||empty( $_POST['password'] )) {
            echo "matric number is required";
            exit();
        }

         $sql = "SELECT * FROM tbluser WHERE Email = '$email' AND password = '$password' ";

		 $result = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($result) > 0) {
		 	while ($row = mysqli_fetch_assoc($result)) {
		 		$id = $row["id"];
		 		$email = $row["Email"];
		 		session_start();
		 		$_SESSION['id'] = $id;
		 		$_SESSION['email'] = $email;
		 	} 
		 	header("location: welcome.php");
		 }
		 else{
		 	echo "invalid email and password";
		 }
	}
	
 ?>


<!DOCTYPE html>
<html>
<head> 
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-4">Login</h1>
			<div class="d-flex flex-column justify-content-center align-items-center">
				<form method="POST">
					<div class="form-group">
						<input type="text" name="email" class="form-control mb-2" placeholder="Email Address" required>
						<input type="password" name="password" class="form-control mb-2" placeholder="password" required>
						<button type="submit" name="submit" class="btn btn-block btn-primary">Login</button>
					</div>
				</form>
			</div>
	</div>
</body>
</html>