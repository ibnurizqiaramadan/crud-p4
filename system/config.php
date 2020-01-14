<?php
session_start();
$servername = "127.0.0.1";
$username   = "root";
$database   = "db_crud";
$password   = "";

$root  = "http://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$base_url   = $root;
$TOKEN      = md5("ibnurizqiaramadn");

$koneksi = new mysqli($servername, $username, $password, $database);

if (!$koneksi) {
    die("Error " . mysqli_connect_error());
}

?>
