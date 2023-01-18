<?php
session_start();
if ($_SESSION["isloggedin"] = false) {
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Document</title>
</head>

<body>
    <a class="btn" href="../loggin/logout.php">loguit</a>
    <div class="form">
        <form action="rit_aanvragen_process.php" method="post">
            <label for="num_passengers">aantal passagier:</label>
            <select id="dropdown" name="num_passengers" size="1">
                <?php
                for ($i = 1; $i <= 8; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select><br>


            <label for="pickup_datetime">pickup datum en tijd:</label>
            <input type="datetime-local" id="pickup_datetime" name="pickup_datetime"><br>

            <label for="pickup_address">pickup address:</label>
            <input type="pickup_address" id="pickup_address" name="pickup_address"><br>

            <label for="pickup_woonplaats">pickup woonplaats:</label>
            <input type="pickup_woonplaats" id="pickup_woonplaats" name="pickup_woonplaats"><br>

            <label for="destination_address">destination address:</label>
            <input type="destination_address" id="destination_address" name="destination_address"><br>

            <label for="destination_plaats">destination plaats:</label>
            <input type="destination_plaats" id="destination_plaats" name="destination_plaats"><br>

            <input type="submit" value="Submit">
        </form>

    </div>

</body>

</html>