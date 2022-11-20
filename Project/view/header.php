
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Views/CSS/header.css">
	<title>Our Hospital</title>
</head>
<body>
<h4>Hello <?php echo $_SESSION['username']; ?></h4>
	  <a href="appoin.php">1)Appintment</a>
	  <a href="choseDoc.php">2)Chose Doctor</a>
	  <a href="medicalCheck.php">3)Medical Checkup</a><br><br>
	  <a href="payment.php">4)Make Payment</a>
	  <a href="booking.php">5)Book cabin</a>
	  <a href="emergencyCont.php">6)Emergency Contact</a><br></br>
	  <a href="updateProfile.php"> Profile Update</a><br></br>        
	  <a href="logout.php">Logout</a><br>
	 
	  

	  
	
	
</body>
</html>