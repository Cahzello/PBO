<?php

include 'db.php';

$data_anggota = $db->readAnggota();
$data_buku = $db->readBuku();
$data_petugas = $db->readPetugas();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
    <style>
        body {
            margin: auto;
            text-align: center;
        }

        table {
            margin: auto;
        }
    </style>
</head>
<body>
    <h3>Data Anggota Perpustakaan</h3>
    <table border="1" cellpadding="5px"  width="30%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
        <?php
            $i = 1;
            foreach($data_anggota as $data){
                $id = $data['id_anggota'];

        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['nama_anggota']; ?></td>
            <td><a href=<?php echo "db.php?aksi=hapus&id=$id"?>>Delete</a></td>
            
        </tr>
        <?php
           $i++; }
        ?>
    </table>

        <a href="insertAnggota.php">Tambah Data Anggota</a>

    <h3 >Data Judul Buku</h3>
    <table border="1" cellpadding="5px"  width="30%">
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
        </tr>
        <?php
            $i = 1;
            foreach($data_buku as $data){
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['judul_buku']; ?></td>
            <td><?php echo $data['pengarang']; ?></td>
        </tr>
        <?php
           $i++; }
        ?>
    </table>
    <h3 >Data Petugas</h3>
    <table border="1" cellpadding="5px"  width="30%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
        </tr>
        <?php
            $i = 1;
            foreach($data_petugas as $data){
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['nama_petugas']; ?></td>
            <td><?php echo $data['username']; ?></td>
        </tr>
        <?php
           $i++; }
        ?>
    </table>
</body>
</html>