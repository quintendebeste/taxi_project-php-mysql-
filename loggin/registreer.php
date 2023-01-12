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
    <form id="login-form" action="verwerk-registreer.php" method="post">
        <h1>Taxi Bedrijf</h1>
        <input type="text" name="firstname" placeholder="Voornaam" required>
        <input type="text" name="lastname" placeholder="Achternaam" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="address" placeholder="Adres" required>
        <input type="text" name="city" placeholder="Stad" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <input type="submit" name="submit" value="Registreren">
    </form>
    <form id="login-form" action="../index.php" method="post">
        <input type="submit" value="Login">
    </form>
</body>
</html>