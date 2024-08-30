<?php
$host = '192.168.0.6';
$user = '';
$password = '';
$database = 'hotspot';

$mysqli = new mysqli($host, $user, $password, $database);

if($mysqli ->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->eror);
}