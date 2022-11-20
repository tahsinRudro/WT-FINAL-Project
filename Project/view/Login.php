<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
	<h1>Patient Login</h1>
	<h4>Patients can login here</h4>
	<hr>
	<form name="infoForm" action="../controller/patientLoginAction.php" onsubmit="return validateForm()" method="post">
		Username: <input type="text" name="username">
		<br><br>
		Password: <input type="password" name="password">
		<br><br>
		<br><br>	
		<input type="submit" name="submit" value="Login">
		
		<br><br>
		<a href="patientReg.html"> <b>Click here</b></a> for new registration 
	</form>
	
	<br>
</body>
</html>