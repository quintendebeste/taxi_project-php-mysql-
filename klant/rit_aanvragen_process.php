<?php

require '../database.php';
session_start();

$pickup_datetime = $_POST["pickup_datetime"];
$pickup_address = $_POST["pickup_address"];
$pickup_plaats = $_POST["pickup_woonplaats"];
$destination_address = $_POST["destination_address"];
$destination_plaats = $_POST["destination_plaats"];
$num_passengers = $_POST["num_passengers"];
$client_id = $_SESSION["user_id"];

$input = $_POST['pickup_datetime'];
$datetime = new DateTime($input);
$datetime->modify('+5 minutes');
$destination_datetime = $datetime->format('Y-m-d H:i:s');

var_dump($_SESSION);

$sql = "INSERT INTO rides (client_id,number_of_passengers,pickup_datetime ,pickup_address ,pickup_city ,destination_datetime,destination_address,destination_city )
        VALUES (?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, 'isssssss', $client_id, $num_passengers, $pickup_datetime, $pickup_address, $pickup_plaats, $destination_datetime, $destination_address, $destination_plaats);

if (mysqli_stmt_execute($stmt)) {
    header("location: homepage.php");
} else {
    echo("fout: query niet uitgevoerd");
}

mysqli_stmt_close($stmt);