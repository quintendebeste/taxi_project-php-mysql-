<?php


require '../database.php';

$sql = "SELECT * FROM `rides` 
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Procuct Details</title>
</head>

<body>
    <table>

        <thead>
            <tr>
                <th >id</th>
                <th>name</th>
                <th>price</th>
                <th> category</th>
                <th>id</th>
                <th>name</th>
                
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($products as $products) : ?>
                <tr>
                    <td><?php echo $rides["product_id"]; ?></td>
                    <td><?php echo $rides["product_name"]; ?></td>
                    <td><?php echo $rides["price"]; ?></td>
                    <td><?php echo $rides["categorie_name"]; ?></td>
                    <td><?php echo $rides[""]?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            

</body>

</html>