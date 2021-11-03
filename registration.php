<?php
	require_once('connection.php');

	if (isset($_POST['submit'])) {

		if (!isset($_POST['email']) ||empty( $_POST['email'] )) {
            echo "email is required";
            exit();
        }
        if (!isset($_POST['matric-number']) ||empty( $_POST['matric-number'] )) {
            echo "matric number is required";
            exit();
        }
        // if (!isset($_POST['password']) ||empty( $_POST['password'] )) {
        //     echo "password is required";
        //     exit();
        // }

		$email = $_POST['email'];
		$matric = $_POST['matric-number'];
		$pwd = $_POST['password'];
		$password = md5($pwd);
		 // $email = $matric = $password = $pwd = '';
		
		$query = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE email = '$email' ");
		if (mysqli_num_rows($query) > 0) {
			echo "email already in use";
		}
		$sql = "INSERT INTO `tbluser` (Email, Matricnumber , password) VALUES ('$email', '$matric', '$password')";

		$result  = mysqli_query($conn, $sql);

		if ($result) {
			header('location: login.php');
		}else{
			die(mysqli_error($conn));
		}

		
	}

	

	
?>