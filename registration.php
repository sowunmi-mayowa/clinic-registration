<?php
	require_once('connection.php');

	$error_message = submit();
	function submit()
	{
		$conn = $GLOBALS['conn'];
		if (isset($_POST['submit'])) {

			if (!isset($_POST['email']) ||empty( $_POST['email'] )) {
	            return "email is required";
	        }
	        if (!isset($_POST['matric-number']) ||empty( $_POST['matric-number'] )) {
	            return "matric number is required";
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

			$query = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE matricnumber = '$matric' ");

			 if (mysqli_num_rows($query) > 0){
			 		return "Martic number already taken";
			 }
			 else{
				$sql = "INSERT INTO `tbluser` (Email, Matricnumber , password) VALUES ('$email', '$matric', '$password')";

				$result  = mysqli_query($conn, $sql);

				if ($result) {
					header('location: login.php');
					exit();
				}else{
					die(mysqli_error($conn));
				}
			}		
		}
	}
?>