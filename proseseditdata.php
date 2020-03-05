<?php
        include_once('koneksi.php');
//  include_once('formeditdata.php');
    
   //     $id = 2;
    //    echo $id;
        $id = $_GET['id'];
        $nama = $_GET['nama'];
        $ktp = $_GET['ktp'];
        $tgl = $_GET['tanggal'];
        $alamat = $_GET['alamat'];
        $agama = $_GET['agama'];
        $email = $_GET['email'];
        $jk = $_GET['formjk'];
       
        //perbaiki id karena belum terdefinisi oleh varibael di prosesedit.php sementara bisa diisi manual saja

        mysqli_query($koneksi, "UPDATE tb_formdata SET nama = '$nama', noidnts = '$ktp', tgl_lahir = '$tgl',
                                                        alamat = '$alamat', agama = '$agama', email = '$email',
                                                        jk = '$jk' WHERE id = '$id'");
       
      // header("location : formdata.php");
     