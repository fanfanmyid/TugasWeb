
        <?php
        include_once('koneksi.php');

        $nama = $_GET['nama'];
        $ktp = $_GET['ktp'];
        $tgl = $_GET['tanggal'];
        $alamat = $_GET['alamat'];
        $agama = $_GET['agama'];
        $email = $_GET['email'];
        $jk = $_GET['formjk'];

        mysqli_query($koneksi, "INSERT INTO tb_formdata (nama,noidnts,tgl_lahir,alamat,agama,email,jk) VALUES ('$nama','$ktp','$tgl','$alamat','$agama','$email','$jk')");
        
      
        header("location:index.php");
    
