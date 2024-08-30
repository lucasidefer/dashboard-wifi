<?php

include('config.php');
if(!isset($_SESSION)) {
    session_start();
}


if(!isset($_SESSION['user'])) {

    header("Location: index.php");
}

$sql = "SELECT * FROM creds ORDER BY id DESC";

$result = $mysqli->query($sql);

?>
