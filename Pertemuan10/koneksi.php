<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}