<?php
    include_once('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca Data</title>
</head>
<body>

    <a href="formdata.php">Tambah Data</a>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Identitas</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
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
    
</body>
</html>