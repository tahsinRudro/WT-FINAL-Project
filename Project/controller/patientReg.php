<?php
    session_start();
    require_once "../model/patientModel.php";

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


    $status = Registration($firstname, $lastname, $gender, $dob, $religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $password);
    if($status){
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/Login.php');
    }else{
        echo  "Invalid";
    }
?>