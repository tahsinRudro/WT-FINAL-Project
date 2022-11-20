<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$dob = $_POST['dob'];
			$religion = $_POST['religion'];
			$PresentAddress = $_POST['PresentAddress'];
			$PermanentAddress = $_POST['PermanentAddress'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];


			if (empty($username) or empty($password)) {
				echo "Please fill up the from properly";
			}
			else{
				$firstname = sanitize($firstname);
				$lastname = sanitize($lastname);
				$gender = sanitize($gender);
				$dob = sanitize($dob);
				$religion = sanitize($religion);
				$PresentAddress = sanitize($PresentAddress);
				$PermanentAddress = sanitize($PermanentAddress);
				$phone = sanitize($phone);
				$username = sanitize($username);
				$password = sanitize($password);


				$handle = fopen("../model/patient.json","a");
				$arr1 = array('firstname' => $firstname,'lastname' => $lastname,'gender' => $gender,'dob' => $dob,'religion' => $religion,'PresentAddress' => $PresentAddress,'PermanentAddress' => $PermanentAddress,'phone' => $phone,'email' => $email,'username' => $username, 'password' => $password);
				$json = json_encode($arr1);
				$res = fwrite($handle, $json . "\n");
				if ($res){
					echo "Registration Successful";
				}
				else {
					echo "Error while saving...";
				}
			}

		}

		function sanitize($data) {

			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}
	?>

	<hr>

	<a href="../view/Login.php">Login</a> | <a href="../view/patientReg.html">Registration</a>
</body>
</html>