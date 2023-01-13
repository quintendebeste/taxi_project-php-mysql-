<?php
if(!empty($_GET) && $_GET["function"] == "ritaanvragen"){
    ritaanvragen();
}

if(!empty($_GET)){
    deleteData($_GET['id'],$_GET['table']);
}

function showData($collums, $table, $role)
{

    require "database.php";

    $sql = "SELECT $collums FROM $table";

    if (!is_null($role)) {
        $sql .= " WHERE role = '$role'";
        return  mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
    }

    return mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
}
function deleteData($id, $table)
{
    require "database.php";

    $sql = "DELETE FROM $table WHERE id = $id";

    mysqli_query($conn, $sql);

    header("location: overzicht-auto.php");
}

function ritaanvragen(){
    require 'database.php';
    var_dump($_POST);

    $number_of_passengers = $_POST["num_passagiers"];
    $pickup_datetime = $_POST["pickup_datetime"];
    $pickup_adress = $_POST["pickup_address"];
    $pickup_city = $_POST["pickup_city"];
    $destination_adress = $_POST["destination_address"];
    $destination_city = $_POST["destination_city"];
    
    $datetime = new DateTime($pickup_datetime);
    $datetime->modify('+5 minutes');
    $new_datetime = $datetime->format('Y-m-d H:i:s');
    
    $destination_datetime = $new_datetime;

    $sql = "INSERT INTO rides (number_of_passengers,pickup_datetime ,pickup_address ,pickup_city ,destination_datetime,destination_address,destination_city )
            VALUES ('$number_of_passengers', '$pickup_datetime','$pickup_adress', '$pickup_city', '$destination_datetime' , '$destination_adress', '$destination_city')";

    mysqli_query($conn, $sql);

    header("location: klant/homepage.php");

    mysqli_close($mysqli);
}
