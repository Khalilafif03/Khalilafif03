<!doctype HTML>
<html>
<head>
    <title>INPUT DATA PASIEN</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>INPUT DATA PASIEN</b></center></h1>
                <form action="proses-input.php" method="POST">
                    <div class="form-group">
                        <label for="kode">KODE PASIEN</label>
                        <input type="number" name="kode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA PASIEN</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="LAKI-LAKI">LAKI - LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="lahir">TEMPAT LAHIR</label>
                        <input type="text" name="lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="hp">NO HP</label>
                        <input type="text" name="hp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>