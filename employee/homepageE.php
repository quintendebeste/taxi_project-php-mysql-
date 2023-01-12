<?php 
if($_SESSION["isloggedin"] = false)
{
    header("location: index.php");
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
            <li><a href="overzicht.php">overzicht ritten</a></li>
            <li><a href="overzicht-auto.php">zie auto's</a></li>  
            <li><a href="overzicht-medewerkers.php">overzicht medewerkers</a></li>
            <li><a href="overzicht-gebruikers.php">overzicht gebruikers</a></li>
        </ul>
    </nav>
    <div class="homepage-title">
        <h2>dit is de homepage van de medewerker</h2>
    </div>
    
</body>
</html>