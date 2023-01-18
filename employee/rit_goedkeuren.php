<?php

session_start();
if (!isset($_SESSION["isloggedin"]) || $_SESSION["isloggedin"] != true || $_SESSION["role"] != "employee") {
    echo "Dze gebruiker is hier niet toegestaan";
    header("location: ../index.html");
    exit;
}

require '../database.php';
require '../functions.php';

$sql = "SELECT * FROM rides";
$result = mysqli_query($conn, $sql);
$all_rides = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <form class="form" action="../loggin/logout.php" method="post">
        <button>logout</button>
    </form>
<h2>aangevraagde ritjes</h2>
    <br>
    <table class="table table-hover table-striped-columns table-sm table-bordered table-dark">
    <thead>
            <tr>
                <th>driver</th>
                <th>number of passengers</th>
                <th>car</th>
                <th>pickup time</th>
                <th>destination time</th>
                <th>price</th>
                <th>afstand</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_rides as $ride_info) : ?>
                <tr>
                    <td>
                        <select id="dropdown" name="driver_name">
                        <?php
                        $sql2 = "SELECT * FROM users WHERE role = 'driver'";
                        $result2 = mysqli_query($conn, $sql2);
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo "<option value='" . $row['driver_names'] . "'>" . $row['firstname'] . "</option>";
                            $_SESSION['driver_name']=$_POST['driver_name'];
                        }
                        ?>
                    </select>
                    </td>
                    <td><?php echo $ride_info["number_of_passengers"] ?></td>
                    <td>
                    <select id="dropdown" name="car">
                        <?php
                        $sql3 ="SELECT * FROM cars WHERE amount_of_seats = " .$ride_info['number_of_passengers'];
                        $result3 = mysqli_query($conn, $sql3);
                        while ($row2 = mysqli_fetch_assoc($result3)) {
                            echo "<option value='" . $row2['car'] . "'>".$row2['brand'] . " " . $row2['model'] . "</option>";
                            $_SESSION['car']=$_POST['car'];
                        }
                        ?>
                    </select>
                    </td>
                    <td><?php echo $ride_info["pickup_datetime"] ?></td>
                    <td><?php echo $ride_info["destination_datetime"] ?></td>
                    <td><?php echo $ride_info["totalprice"] ?></td>
                    <td><?php echo $ride_info["distance_driven"] ?></td>
                    <td>
                        <form class="form" action="a.php" method="post">
                            <?php?>
                            <button>keur rit goed</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>