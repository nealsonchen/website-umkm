<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO tbl_users (username, password, email ) 
            VALUES  ('$username', '$password', '$email')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
