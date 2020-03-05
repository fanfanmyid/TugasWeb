<?php
    include_once('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca Data</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 judul text-center">
                <h2>List Isi Database</h2>
                <h5>Silahkan gunakan menu yang tersedia</h5>
                <br><br>
            <table border="5px" class="table">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Identitas</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Action</th>
                </tr>

                <?php
                    $query = mysqli_query($koneksi, 'SELECT * FROM tb_formdata');

                    $no = 1;
                    while($row=mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>$no </td>";
                        echo "<td>$row[nama]</td>";
                        echo "<td>$row[noidnts]</td>";
                        echo "<td>$row[tgl_lahir]</td>";
                        echo "<td>$row[alamat]</td>";
                        echo "<td>$row[agama]</td>";
                        echo "<td>$row[email]</td>";
                        echo "<td>$row[jk]</td>";
                        echo "<td><a href='formeditdata.php?id=$row[id]'>Edit</a>
                                <a href='prosesdeletedata.php?id=$row[id]'>Delete</a> </td>";

                        $no++;

                    }

                ?>

            </table>

            <a href="formdata.php" class="btn">Tambah Data</a>
        </div>
    </div>
</div>
</body>
</html>