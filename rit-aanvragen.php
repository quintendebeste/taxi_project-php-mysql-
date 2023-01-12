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
        <form action="function.php" method="post">
            <label for="">voornaam</label>
            <input type="text" name="firstname" id=""><br>
            <label for="">achternaam</label>
            <input type="text" name="lastname" id=""><br>
            <label for="">email</label>
            <input type="text" name="email" id=""><br>
            <label for="">adres</label>
            <input type="text" name="address" id="">
            <label for="">stad</label>
            <input type="text" name="city" id="">
            <label for="">wachtwoord</label>
            <input type="password" name="password" id=""><br>
            <button name="submit" type="submit">registreer</button>
            <button><a href="index.php">login</a></button>
        </form>
    </div>
</body>
</html>