<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "formdata";

    $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");