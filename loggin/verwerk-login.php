<?php

require "../database.php";


$firstname = $_POST["firstname"];
$password = $_POST["password"];




$sql = "SELECT * FROM users WHERE firstname = ? AND password = ?";

$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_bind_param($stmt,"ss", $firstname,$password);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($result);

if (!is_null($user)) {
    session_start();
    

    $_SESSION["firstname"] = $user["firstname"];
    $_SESSION["password"] = $user["password"];
    $_SESSION["isloggedin"] = true;
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["role"] = $user["role"];
    
    if ($user["role"] == "customer") {
        header("location: ../klant/homepage.php");
    }
    if ($user["role"] == "employee") {
        header("location: ../employee/homepageE.php");
    } 
    if ($user["role"] == "driver") {
        header("location: ../driver/homepageD.php");
    }
}
else{
    echo "geen account";
    header("../index.php");
}


mysqli_close($conn); // Sluit de database verbinding