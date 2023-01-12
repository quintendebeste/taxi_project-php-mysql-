<?php

$func = $_GET["function"];
$id = $_GET["id"];
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
    <div class="form">
        <form action="../function.php" method="post">
        <label for="num_passagiers">aantal passagiers:</label>
        <select name="num_passagiers" id="num_passagiers" size="1">
            <option value="1-4">1-4</option>
            <option value="5-8">5-8</option>
        </select><br>
        <label for="pickup_datetime">pickup datum en tijd:</label>
        <input type="datetime-local" id="pickup_datetime" name = "pickup_datetime"><br>

        <label for="pickup_address">pickup adres:</label>
        <input type="text" id="pickup_address" name = "pickup_address"><br>

        <label for="pickup_city">pickup stad:</label>
        <input type="text" id="pickup_city" name = "pickup_city"><br>

        <label for="destination_address">aankomst adres:</label>
        <input type="text" id="destination_address" name = "destination_address"><br>

        <label for="destination_city">aankomst stad:</label>
        <input type="text" id="destination_city" name = "destination_city"><br>

        <input type="submit"><br>
        </form>
    </div>
</body>
</html>