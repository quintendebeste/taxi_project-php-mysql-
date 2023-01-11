<?php

if(!empty($_GET)){
    deleteData($_GET['id'],$_GET['table']);
}

function showData($collums, $table, $role)
{

    require "database.php";

    $sql = "SELECT $collums FROM $table";

    if (!is_null($role)) {
        $sql .= " WHERE role = '$role'";
        return  mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
    }

    return mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
}
function deleteData($id, $table)
{
    require "database.php";

    $sql = "DELETE FROM $table WHERE id = $id";

    mysqli_query($conn, $sql);

    header("location: overzicht-auto.php");
}
