<?php

include "database.php";

$dataBeli = $db->readPembelian();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <style>
        body {
            margin: auto;
            text-align: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pensi {
            border: 1px solid black;
            width: auto;
            padding: 10px;
            margin: auto;
            margin-top: 15%;
        }
    </style>
</head>
<body>
    <form action="database.php" method="POST">
        <div class="pensi">
            tanggal : <input type="date" name="tanggal">
            <br>
            <label for="barang-select">Pilih Barang</label>
            <select name="barang" id="barang-select">
                <option value="">Pilih</option>
            <?php
                $i = 1;
                foreach($dataBeli as $data){
            ?>
                <option value="namaBarang"><?php echo $data['nama_barang']; ?></option>
            <?php 
                $i++; }
            ?>
            </select>
            <br>
            Quantity : <input type="number" name="kuantitas">
            <br>
            <input type="submit" value="SIMPAN" name="submitPembelian">
            <br>
            <a href="index.php">Home</a>

        </div>
    </form>
</body>

</html>