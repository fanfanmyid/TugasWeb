<?php
include_once('koneksi.php');
?>
<?php include 'header.php'; ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 judul text-center">
                <h2>List Isi Database</h2>
                <h5>Silahkan gunakan menu yang tersedia</h5>
                <br><br>
                <table border="2px" class="table table-striped table-light">
                    <thead class="thead-dark">
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
                    </thead>

                    <?php
                    $query = mysqli_query($koneksi, 'SELECT * FROM tb_formdata');

                    $no = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<tr sccope='row'>";
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

                <a href="formdata.php" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    </div>
</body>

</html>