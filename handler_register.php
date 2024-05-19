<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = new mysqli('localhost', 'root', '', 'db_register');
if ($koneksi){
    echo "koneksi berhasil";
} else{
    echo $koneksi->error;
}

$insert = $koneksi->query("INSERT INTO user
(username, email, password)
values
('$username', '$email', '$password')
");

if ($insert){
    echo ", dan insert data berhasil";
} else {
    echo "gagal insert data";
}
?>