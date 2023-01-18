<?php


require '../database.php';

$sql = "SELECT users1.firstname as client_name, users2.firstname as driver_name, rides.totalprice as price, rides.distance_driven as distance, cars.brand as brand, rides.number_of_passengers as seats

FROM rides

JOIN cars ON cars.id = rides.taxi_id 
JOIN users as users1 ON users1.id = rides.client_id and users1.role = 'customer'
JOIN users as users2 ON users2.id = rides.driver_id and users2.role = 'driver'
ORDER BY distance_driven DESC LIMIT 3";

$result = mysqli_query($conn, $sql);

$rides = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Procuct Details</title>
</head>

<body>
    <a class="btn" href="../loggin/logout.php">loguit</a>
    <table>
        <thead>
            <tr>
                <th >client name</th>
                <th>driver name</th>
                <th>price</th>
                <th>distance driven</th>
                <th>car brand</th>
                <th>number of seats</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($rides as $ride) : ?>
                <tr>
                    <td><?php echo $ride["client_name"]; ?></td>
                    <td><?php echo $ride["driver_name"]; ?></td>
                    <td><?php echo $ride["price"]; ?></td>
                    <td><?php echo $ride["distance"]; ?></td>                   
                    <td><?php echo $ride["brand"]; ?></td>
                    <td><?php echo $ride["seats"]; ?></td>                   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            

</body>

</html>