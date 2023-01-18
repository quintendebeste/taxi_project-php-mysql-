<?php
session_start();
if (!isset($_SESSION["isloggedin"]) || $_SESSION["isloggedin"] != true || $_SESSION["role"] != "employee") {
    echo "Dze gebruiker is hier niet toegestaan";
    header("location: ../index.html");
    exit;
}

require '../database.php';
$id = $_GET['id']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
    </style>
</head>

<header>

</header>

<body>
<h2>kies een chaufeur en auto</h2>
            <form class="form" action="" method="post">
                <select id="dropdown" name="car">
                    <?php
                    $sql3 ="SELECT * FROM cars WHERE amount_of_seats = " .$_GET['num_passengers'];
                    $result3 = mysqli_query($conn, $sql3);
                    while ($row2 = mysqli_fetch_assoc($result3)) {
                        echo "<option value='" . $row2['id'] . "'>".$row2['brand'] . " " . $row2['model'] . "</option>";
                    }
                    ?>
                </select>
                <select id="dropdown" name="driver_name">
                    <?php
                    $sql2 = "SELECT * FROM users WHERE role = 'driver'";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . "</option>";
                    }
                    ?>
                </select>
                <button type="submit" name="submit">keur rit goed</button>
            </form>
</body>
<?php 
if(isset($_POST['submit']))
{
    $car = $_POST["car"];
    $driver_name = $_POST["driver_name"];

    $sql = "UPDATE rides
    SET taxi_id = '$car', driver_id= '$driver_name', status = 'Bezig'
    WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        header("location: homepageE.php");
    }
    else{
        echo("jammer maar de query uitvoeren is mislukt");
    }
    mysqli_close($conn);
      
}
?>
</html>
