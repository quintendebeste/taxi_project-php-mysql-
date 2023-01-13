<?php
require "../functions.php";
session_start();
if($_SESSION["isloggedin"] = false)
{
    header("location: index.php");
}
$gebruikers = showData("*", "users", "customer");
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
            <?php foreach ($gebruikers as $gebruiker) : ?>
                <tr>
                    <td><?php echo $gebruiker['id']; ?></td>
                    <td><?php echo $gebruiker['firstname']; ?></td>
                    <td><?php echo $gebruiker['lastname']; ?></td>
                    <td><?php echo $gebruiker['email']; ?></td>
                    <td><?php echo $gebruiker['address']; ?></td>
                    <td><?php echo $gebruiker['city']; ?></td>
                    <td><?php echo $gebruiker['role']; ?></td>
                    <td><?php echo $gebruiker['is_active']; ?></td>
                    <td><?php echo $gebruiker['password']; ?></td>
                    <td>
                    <td>
                        <a href="../functions.php?id=<?php echo $auto['id']; ?>&table=cars">delete</a>
                    </td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>