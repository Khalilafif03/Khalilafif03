<!doctype HTML>
<html>
<head>
    <title>EDIT DATA PASIEN</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>EDIT DATA PASIEN</b></center></h1>
                <form action="proses-edit.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from pasien where pasien_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="kode">KODE PASIEN</label>
                        <input type="hidden" name="pasien_id" value="<?php echo $row['pasien_id']?>" class="form-control">
                        <input type="number" name="kode" value="<?php echo $row['kode']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA PASIEN</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="LAKI-LAKI">LAKI - LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="lahir">TEMPAT LAHIR</label>
                        <input type="text" name="lahir" value="<?php echo $row['lahir']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="hp">NO HP</label>
                        <input type="text" name="hp" value="<?php echo $row['hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>