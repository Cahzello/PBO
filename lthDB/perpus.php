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
        *, body {
            padding: 0;
            margin: 0;
        }
        
        body {
            margin: auto;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, darkblue , darkgreen);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            margin: auto;
            width: 60%;
            /* padding: 10px; */
        }
        
        th, td {
            padding: 4px;
        }

        
        .btn {
            border: 1px solid black;
            width: 20%;
            padding: 4px;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            background-color: lightgreen;
        }
        
        a {
            text-decoration: none;

        }

        .btn > a {
            text-decoration: none;
            color: black;
        }

        .table {
            background-color: #eaeaea;
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 40px;

        }
        
    </style>
</head>
<body>
    <div class="table">
        
        <h3>Data Anggota Perpustakaan</h3>
        <table border="1" cellpadding="5px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                $i = 1;
                foreach($data_anggota as $data){
                    $id = $data['id_anggota'];
    
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nama_anggota']; ?></td>
                <td><a href="editAnggota.php">Edit</a></td>
                <td><a href=<?php echo "db.php?aksi=hapus&id=$id"?>>Delete</a></td>
                
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertAnggota.php">Tambah Data Anggota</a>
    
        </div>
    
        <h3 >Data Judul Buku</h3>
        <table border="1" cellpadding="5px"  >
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Pengarang</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                $i = 1;
                foreach($data_buku as $data){
                    $id = $data['id_buku'];
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['judul_buku']; ?></td>
                <td><?php echo $data['pengarang']; ?></td>
                <td><a href=<?php ?>>Edit</a></td>
                <td><a href=<?php echo "db.php?aksi=hapus&id=$id"?>>Delete</a></td>        
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertBuku.php">Tambah Data Buku</a>
    
        </div>
    
    
        <h3 >Data Petugas</h3>
        <table border="1" cellpadding="5px"  >
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                $i = 1;
                foreach($data_petugas as $data){
                    $id = $data['id_petugas'];
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nama_petugas']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><a href=<?php ?>>Edit</a></td>
                <td><a href=<?php echo "db.php?aksi=hapus&id=$id"?>>Delete</a></td>  
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertPetugas.php">Tambah Data Petugas</a>
    
        </div>
    </div>

</body>
</html>