<?php

require '../database.php';


$sql = "INSERT INTO users (firstname,lastname,email,address,city,password,role) VALUES (?,?,?,?,?,?,?)";
$insertstatement = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($insertstatement, 'sssssss', $firstname, $lastname, $email,$address,$city, $password,$role);


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$password = $_POST["password"];
$role = "customer";
mysqli_stmt_execute($insertstatement);


echo "Inserted successfully";
mysqli_close($conn);
header("location: registreer.php");