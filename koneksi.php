<?php
    // host web server
    $host = "localhost";
    // username untuk mengakses database
    $username = "root";
    // password untuk mengakses database
    $pass = "";
    // database yang digunakan
    $database = "movies";
    // script untuk mengkoneksi database
    $koneksi = mysqli_connect($host,$username,$pass,$database);

    if($koneksi=== false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>