<?php
// koneksi.php
$database_hostname = "localhost"; // Host database
$database_username = "root"; // Username database
$database_password = ""; // Password database
$database_name     = "sttb"; // Nama database

// Membuat koneksi
try{
    $database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name",
    $database_username, $database_password);
    $cek = "Koneksi Berhasil";
    echo $cek;

}catch(PDOException $x){
    die($x->getmessage());
}
?>
