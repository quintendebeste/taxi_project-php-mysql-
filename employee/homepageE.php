<?php

session_start();
if (!isset($_SESSION["isloggedin"]) || $_SESSION["isloggedin"] != true || $_SESSION["role"] != "employee") {
    echo "Dze gebruiker is hier niet toegestaan";
    header("location: ../index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Document</title>
</head>

<body>
    <nav class="menubalk">
        <ul>
            <li><a href="overzicht-auto.php">overzicht auto</a></li>
            <li><a href="overzicht-gebruikers.php">overzicht gebruikers</a></li>
            <li><a href="overzicht-medewerkers.php">overzicht medewerkers</a></li>
            <li><a href="rit_goedkeuren.php">rit goedkeuren</a></li>
            <li><a href="overzicht-langste-rit.php">drie langste ritten</a></li>
        </ul>
    </nav>
    <div class="homepage-title">
        <h2>dit is de homepage van de medewerker</h2>
    </div>

</body>

</html>