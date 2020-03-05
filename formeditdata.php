<?php
    include_once('koneksi.php');

    $id = $_GET['id'];
  //  echo $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_formdata WHERE id='$id'");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Identitas EDIT </title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-12 judul text-center">
                <h2>Form Pengisian Identitas</h2>
                <h5>Silahkan masukkan identitas Anda</h5>
                <br><br>
                <form action="proseseditdata.php" methode="GET">
                    <div class="formborder">
                        <div class="form text-left">


                            <div class="form-group">
                                <label for="form">Id Database </label>
                                <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['id'] ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="form">Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="form">Nomor Identitas</label>
                                <input type="text" class="form-control" name="ktp" id="ktp" value="<?php echo $row['noidnts'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="form">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $row['tgl_lahir'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="form">Alamat Lengkap </label><br>
                                <textarea class="form-control" name="alamat" rows="4" id="alamat" ><?php echo $row['alamat'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="form">Agama</label><br>
                                <select class="form-control" name="agama" id="agama" value="<?php echo $row['agama'] ?>">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Protestan</option>
                                    <option>Hindu</option>
                                    <option>Konghuchu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="form">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email'] ?>">
                            </div>

                            <label for="form"></label>Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formjk" id="inlineRadio1"
                                    value="Laki Laki">
                                <label class="form-check-label" for="inlineRadio1" value="<?php echo $row['jk'] ?>" >Laki Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formjk" id="inlineRadio2"
                                    value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2" value="<?php echo $row['jk'] ?>" >Perempuan</label>
                            </div><br><br>

                        </div>

                    </div>


                    <input class="myINPUT" id="myInput" value="Hasil Input Yaitu :">
                    <button type="submit" onclick="getInputValue();" class="btn">Kirim Identitas</button>
                    <script src="animate.js"></script>
                </form>

            </div>
        </div>
    </div>

</body>

</html>