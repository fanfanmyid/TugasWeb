<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "input_form";

    $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");