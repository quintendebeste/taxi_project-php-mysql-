<?php
$id = $_SESSION["id"];
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
            <li><a href="categories_show.php">zie categorieen</a></li>
            <li><a href="products_show.php">zie producten</a></li>  
            <li><a href="rit-aanvragen.php?id=<?php echo $id?>&function=ritaanvragen">rit aanvragen</a></li>  
        </ul>
    </nav>
    <div class="homepage-title">
        <h2>dit is de homepage van de klant</h2>
    </div>
    
</body>
</html>