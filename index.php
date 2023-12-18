<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>
    Ahmad Fathur Rohman | 121140082</title>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Lokasi Penempatan Peserta KKN PPM Periode-12</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://kkn.itera.ac.id">Website KKN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://kkn.itera.ac.id/informasi/">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://kkn.itera.ac.id/sejarah-kkn/">Sejarah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <br>
    <h4><center>DAFTAR PESERTA KKN PPM PERIODE-12</center></h4>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_peserta'])) {
        $id_peserta=htmlspecialchars($_GET["id_peserta"]);

        $sql="delete from peserta where id_peserta='$id_peserta' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                echo "<script>alert('Data telah berhasil ditambahkan');window.location='index.php';</script>";

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Kelompok</th>
            <th>Kabupaten</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from peserta order by id_peserta desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nim"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["program_studi"];   ?></td>
                <td><?php echo $data["jenis_kelamin"];   ?></td>
                <td><?php echo $data["no_hp"];   ?></td>
                <td><?php echo $data["kelompok"];   ?></td>
                <td><?php echo $data["kabupaten"];   ?></td>
                <td><?php echo $data["kecamatan"]; ?></td>
                <td><?php echo $data["desa"]; ?></td>
                <td>
                    <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
    <style>
        body {
            background-color: #f0f0f0; /* Ganti dengan warna yang Anda inginkan */
        }
    </style>
<footer class="footer mt-auto py-3 bg-dark text-white">
  <div class="container text-center">
    <span>© Ahmad Fathur Rohman | 121140082</span>
  </div>
</footer>
</body>
</html>
