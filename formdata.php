<!DOCTYPE html>
<html>

<head>
    <title>Form Identitas </title>

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
                
                <form action="prosesdata.php" methode="GET">
                    <div class="formborder">
                        <div class="form text-left">

                            <div class="form-group">
                                <label for="form">Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama">

                            </div>

                            <div class="form-group">
                                <label for="form">Nomor Identitas</label>
                                <input type="text" class="form-control" name="ktp" id="ktp">
                            </div>

                            <div class="form-group">
                                <label for="form">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div>

                            <div class="form-group">
                                <label for="form">Alamat Lengkap </label><br>
                                <textarea class="form-control" name="alamat" rows="4" id="alamat"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="form">Agama</label><br>
                                <select class="form-control" name="agama" id="agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Protestan</option>
                                    <option>Hindu</option>
                                    <option>Konghuchu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="form">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                            <label for="form"></label>Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formjk" id="inlineRadio1"
                                    value="Laki Laki">
                                <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formjk" id="inlineRadio2"
                                    value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
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