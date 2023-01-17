<?php


require 'database.php';

$sql = "SELECT 
products.name AS product_name,
categories.name AS categorie_name,
price,
products.id AS product_id
 FROM `products`
 JOIN categories
      ON categories.id = products.category;";

$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product["product_id"]; ?></td>
                    <td><?php echo $product["product_name"]; ?></td>
                    <td><?php echo $product["price"]; ?></td>
                    <td><?php echo $product["categorie_name"]; ?></td>
                    <td><?php echo $product[""]?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            

</body>

</html>