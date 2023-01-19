<?php
require "../database.php";
require "../functions.php";
session_start();
if ($_SESSION["isloggedin"] = false) {
    header("location: ../index.php");
}
$id = $_SESSION['user_id'];

//aangevraagde ritten
$sql = "SELECT pickup_datetime, destination_datetime, distance_driven, totalprice FROM rides WHERE client_id = $id AND status = 'Aangevraagd'";
$result = mysqli_query($conn, $sql);
$ride = mysqli_fetch_all($result, MYSQLI_ASSOC);
//goedgekeurde ritten
$sql2 = "SELECT pickup_datetime, destination_datetime, distance_driven, totalprice FROM rides WHERE client_id = $id AND status = 'Bezig'";
$result2 = mysqli_query($conn, $sql2);
$ride2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logging-design.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <a class="btn" href="../loggin/logout.php">loguit</a>
    <a class="btn" href="rit-aanvragen.php">rit aanvragen</a>
    <a class="btn" href="homepage.php">terug</a>

    <h2>aangevraagde ritjes</h2>
    <br>
    <table class="table table-hover table-striped-columns table-sm table-bordered table-dark">
        <thead>
            <tr>
                <th>driver</th>
                <th>car</th>
                <th>pickup time</th>
                <th>destination time</th>
                <th>price</th>
                <th>afstand</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ride as $ride_info) : ?>
                <tr>
                    <td><?php echo "unknown" ?></td>
                    <td><?php echo "unknown" ?></td>
                    <td><?php echo $ride_info["pickup_datetime"] ?></td>
                    <td><?php echo $ride_info["destination_datetime"] ?></td>
                    <td><?php echo $ride_info["totalprice"] ?></td>
                    <td><?php echo $ride_info["distance_driven"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <h2>goedgekeurde ritjes</h2>
    <br>
    <table class="table table-hover table-striped-columns table-sm table-bordered table-dark">
        <thead>
            <tr>
                <th>driver</th>
                <th>car</th>
                <th>pickup time</th>
                <th>destination time</th>
                <th>price</th>
                <th>afstand</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ride2 as $ride_info2) : ?>
                <tr>
                    <td><?php echo "unknown" ?></td>
                    <td><?php echo "unknown" ?></td>
                    <td><?php echo $ride_info2["pickup_datetime"] ?></td>
                    <td><?php echo $ride_info2["destination_datetime"] ?></td>
                    <td><?php echo $ride_info2["totalprice"] ?></td>
                    <td><?php echo $ride_info2["distance_driven"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>