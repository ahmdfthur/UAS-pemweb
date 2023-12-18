<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    include "connect.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nim=input($_POST["nim"]);
        $nama=input($_POST["nama"]);
        $program_studi=input($_POST["program_studi"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $no_hp=input($_POST["no_hp"]);
        $kelompok=input($_POST["kelompok"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["kecamatan"]);
        $desa=input($_POST["desa"]);

        $sql="INSERT INTO peserta (nim, nama, program_studi, jenis_kelamin, no_hp, kelompok, kabupaten, kecamatan, desa) VALUES ('$nim','$nama','$program_studi','$jenis_kelamin','$no_hp','$kelompok','$kabupaten','$kecamatan','$desa')";


        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            echo "<script>alert('Data telah berhasil ditambahkan');window.location='index.php';</script>";
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" required />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required/>
        </div>
        <div class="form-group">
            <label>Program Studi:</label>
            <input type="text" name="program_studi" class="form-control" placeholder="Program Studi" required/>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="number" name="no_hp" class="form-control" placeholder="No HP" required/>
        </div>
        <div class="form-group">
            <label>Kelompok:</label>
            <input type="number" name="kelompok" class="form-control" placeholder="Kelompok" required/>
        </div>
        <div class="form-group">
            <label>Kabupaten:</label>
            <select name="kabupaten" class="form-control" required>
                <option value="">Pilih Kabupaten</option>
                <option value="Lampung Tengah">Lampung Tengah</option>
                <option value="Lampung Timur">Lampung Timur</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kecamatan:</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required/>
        </div>
        <div class="form-group">
            <label>Desa:</label>
            <input type="text" name="desa" class="form-control" placeholder="Desa" required/>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>