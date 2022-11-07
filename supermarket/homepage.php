<?php

include 'database.php';

$data_barang = $db->readBarang();


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
            background-color: black;
        }
        
        a {
            text-decoration: none;

        }

        .btn > a {
            text-decoration: none;
            color: white;
        }

        .table {
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
    <div class="table">
        
        <h3>Data Barang Supermarket</h3>
        <table border="1" cellpadding="5px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Total Barang</th>
                <th>Harga Barang</th>
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
                <td><a href=<?php echo "updateBarang.php?aksi=update&id=$id" ?>>Edit</a></td>
                <td><a href=<?php echo "database.php?aksi=hapusBarang&id=$id"?>>Delete</a></td>
                
            </tr>
            <?php
               $i++; }
            ?>
        </table>
        <div class="btn">
            <a href="insertBarang.php">Tambah Data Anggota</a>
    
        </div>
 
    </div>

</body>
</html>