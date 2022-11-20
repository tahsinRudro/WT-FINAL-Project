<?php 
session_start();
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Action</title>
</head>
<body>

	<?php
	
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rememberme = isset($_POST['rememberme']) ? $_POST['rememberme'] : null;

			if (empty($username) or empty($password)) {
				echo "Please fill up the from properly";
			}
			else{
					if (file_exists("../model/patient.json")) {
						
					

					$handle = fopen("../model/patient.json","r");
					$data = fread($handle, filesize("../model/patient.json"));
					$data = explode("\n", $data);
					$isValid = false;
					for ($i=0; $i < count($data) - 1 ; $i++) { 
						// code...
						$json = json_decode($data[$i]);
						if ($username === $json->username and $password === $json->password) {
							// code...
							$isValid = true;
							break;
						}
					}
					if ($isValid){
						
						$_SESSION['username'] = $username;
						header("Location:../view/front.php");
					}
					else {
						echo "Login Failed...";
					}
				}
				else {
					echo "Internal Server Error";
				}
			}

		}
	?>

	<hr>

	<a href="../view/Login.php">Login</a> | <a href="../view/patientReg.html">Registration</a>

</body>
</html>