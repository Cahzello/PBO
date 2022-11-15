<?php

include 'database.php';

$data_barang = $db->readBarang();
$data_pembelian = $db->readPembelian();

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
            background-color: #eaeaea;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            margin: auto;
            width: 60%;
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
            background-color: black;
        }
        
        a {
            text-decoration: none;

        }

        .btn > a {
            text-decoration: none;
            color: white;
        }

        .card {
            background-color: #eaeaea;
            box-shadow: 6px 4px 20px black, -6px -4px 20px black;
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 40px;

        }
        
    </style>
</head>
<body>
    <div class="card">
        
        <h3>Data Barang Supermarket</h3>
        <table border="1" >
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Total Barang</th>
                <th>Harga Barang</th>
                <th>Total Harga</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                $i = 1;
                foreach($data_barang as $data){
                    $id = $data['id_barang'];
    
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['total_barang']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['harga'] * $data['total_barang']; ?></td>
                <td><a href=<?php echo "updateBarang.php?aksi=update&id=$id" ?>>Edit</a></td>
                <td><a href=<?php echo "database.php?aksi=hapusBarang&id=$id"?>>Delete</a></td>
                
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertBarang.php">Tambah Data Barang</a>
    
        </div>
                
        <h3>Daftar Pembelian</h3>
        <table border="1" >
            <tr>
                <th>No</th>
                <th>Tanggal Pembelian</th>
                <th>Nama Barang</th>
                <th>Quantity</th>
            </tr>
            <?php
                $i = 1;
                foreach($data_pembelian as $data){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['tanggal_pembelian'];  ?></td>
                <td><?php echo $data['nama_barang']?></td>
                <td><?php echo $data['quantity']; ?></td>
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertPembelian.php">Tambah Data Pembelian</a>
        </div>
    </div>

</body>
</html>