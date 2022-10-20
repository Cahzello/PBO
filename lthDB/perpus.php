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
</head>
<body>
    <h3 align="center" >Data Anggota Perpustakaan</h3>
    <table border="1" cellpadding="5px" align="center" width="30%">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php
            $i = 1;
            foreach($data_anggota as $data){
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['nama_anggota']; ?></td>
        </tr>
        <?php
           $i++; }
        ?>
    </table>
    <h3 align="center">judul buku</h3>
    <table border="1" cellpadding="5px" align="center" width="30%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>pengarang</th>
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
    <h3 align="center">petugas</h3>
    <table border="1" cellpadding="5px" align="center" width="30%">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>pengarang</th>
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