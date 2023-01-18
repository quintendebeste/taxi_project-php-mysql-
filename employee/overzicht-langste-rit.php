<?php


require '../database.php';

$sql = "SELECT users.firstname as client_name 

FROM `rides` 

JOIN cars ON cars.id = rides.taxi_id 
JOIN users ON users.id = rides.client_id
ORDER BY distance_driven DESC LIMIT 3;";

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
    <table>
        <thead>
            <tr>
                <th >client name</th>
                <th>driver name</th>
                <th>price</th>
                <th> distance driven</th>
                <th>car brand</th>
                <th>number of seats</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($rides as $ride) : ?>
                <tr>
                    <td><?php echo $ride["client_name"]; ?></td>
                    <td><?php echo $ride[""]; ?></td>
                    <td><?php echo $ride[""]; ?></td>
                    <td><?php echo $ride[""]; ?></td>
                    <td><?php echo $ride[""]?></td>
                    <td><?php echo $ride[""]?></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            

</body>

</html>