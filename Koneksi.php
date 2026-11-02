<?php
// buka koneksi ke database server
$database = "praktikumdb"; 
$hostname = "localhost";
$username = "root";
$password = "";

$dbh = mysqli_connect($hostname, $username, $password, $database);

if (!$dbh) {
    echo mysqli_connect_error();
    exit;
} else {
    echo "<h1><b>selamat anda sukses mengakses database</b></h1><br/><hr/>";
}
?>
