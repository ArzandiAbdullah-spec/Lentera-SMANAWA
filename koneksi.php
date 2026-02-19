<?php
$host = "sql111.infinityfree.com";
$user = "if0_41001236";
$pass = "xUXJXQCBvwKsW0";
$db   = "if0_41001236_atm_smanawa";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
mysqli_query($conn, "SET time_zone = '+07:00'");
?>