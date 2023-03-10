<?php
require "../functions.php";
session_start();
if($_SESSION["isloggedin"] = false)
{
    header("location: index.php");
}
$medewerkers = showData("*", "users", "employee");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <a class="btn" href="homepageE.php">terug</a>
    <title>Document</title>
</head>

<body>
    <a class="btn" href="../loggin/logout.php">loguit</a>
    <table>

        <thead>
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>achternaam</th>
                <th>email</th>
                <th>adres</th>
                <th>stad</th>
                <th>role</th>
                <th>is actief</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medewerkers as $medewerker) : ?>
                <tr>
                    <td><?php echo $medewerker["id"]; ?></td>
                    <td><?php echo $medewerker["firstname"]; ?></td>
                    <td><?php echo $medewerker["lastname"]; ?></td>
                    <td><?php echo $medewerker["email"]; ?></td>
                    <td><?php echo $medewerker["address"]; ?></td>
                    <td><?php echo $medewerker["city"]; ?></td>
                    <td><?php echo $medewerker["role"]; ?></td>
                    <td><?php echo $medewerker["is_active"]; ?></td>
                    <td><?php echo $medewerker["password"]; ?></td>
                    <td>
                    <td>
                        <a href="../functions.php?id=<?php echo $medewerker['id']; ?>&table=users">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>