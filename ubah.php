<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['id_peserta'])) {
        $id_peserta=input($_GET["id_peserta"]);

        $sql="select * from peserta where id_peserta=$id_peserta";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_peserta=htmlspecialchars($_POST["id_peserta"]);
        $nim=input($_POST["nim"]);
        $nama=input($_POST["nama"]);
        $program_studi=input($_POST["program_studi"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $no_hp=input($_POST["no_hp"]);
        $kelompok=input($_POST["kelompok"]);
        $kabupaten=input($_POST["kabupaten"]);
        $kecamatan=input($_POST["kecamatan"]);
        $desa=input($_POST["desa"]);

        //Query update data pada tabel anggota
        $sql="update peserta set
            nim='$nim',
			nama='$nama',
			program_studi='$program_studi',
			jenis_kelamin='$jenis_kelamin',
			no_hp='$no_hp',
			kabupaten='$kabupaten',
			kecamatan='$kecamatan',
			desa='$desa'
			where id_peserta=$id_peserta";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
            <input type="text" name="no_hp" class="form-control" placeholder="No HP" required/>
        </div>
        <div class="form-group">
            <label>Kabupaten:</label>
            <select name="kabupate" class="form-control" required>
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

        <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>