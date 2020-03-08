<?php
//Connect to database
$servername = "localhost";
$username = "root";        //put your phpmyadmin username.(default is "root")
$password = "";            //if your phpmyadmin has a password put it here.(default is "root")
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Create database
$sql = "CREATE DATABASE formdata";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

echo "<br>";

$dbname = "formdata";

$conn = new mysqli($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `tb_formdata` (
			`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`nama` varchar(100) NOT NULL,
			`noidnts` varchar(10) NOT NULL,
            `tgl_lahir` date ,
			`alamat` varchar(50) NOT NULL,
            `agama` varchar(50) NOT NULL,
            `email` varchar(50) NOT NULL,
            `jk` varchar(50) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
    echo "Table tb_formdata created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
