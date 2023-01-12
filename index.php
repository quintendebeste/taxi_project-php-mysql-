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
    <form id="login-form" action="loggin/verwerk-login.php" method="post">
        <h1>Taxi Bedrijf</h1>
        <input type="text" name="firstname" placeholder="Gebruikersnaam" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <input type="submit" name="submit" value="Inloggen">
    </form>
    <form id="login-form" action="registreer.php" method="post">
        <input type="submit" value="Registreren">
    </form>
</body>

</html>