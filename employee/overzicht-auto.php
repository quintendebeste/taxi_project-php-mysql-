<?php

require "../functions.php";

$autos = showData("*", "cars", NULL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>

    <table>

        <thead>
            <tr>
                <th>id</th>
                <th>merk</th>
                <th>model</th>
                <th>nummerplaat</th>
                <th>aantal zitplaatsen</th>
                <th>verwijder</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($autos as $auto) : ?>
                <tr>
                    <td><?php echo $auto['id']; ?></td>
                    <td><?php echo $auto['brand']; ?></td>
                    <td><?php echo $auto['model']; ?></td>
                    <td><?php echo $auto['numberplate']; ?></td>
                    <td><?php echo $auto['amount_of_seats']; ?></td>
                    <td>
                        <a href="../functions.php?id=<?php echo $auto['id']; ?>&table=cars">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>