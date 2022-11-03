<?php 
include "database.php";

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
        }

        .pensi {
            border: 1px solid black;
            width: 40%;
            padding: 10px;
            margin: auto;
            margin-top: 15%;
        }
    </style>
</head>
<body>
    <form action="database.php" method="POST">
        <div class="pensi">
            <input type="hidden" name="id_barang" value="<?php echo $id; ?>">
            Nama barang Yang Baru : <input type="text" name="nama_barang" value="<?php echo $db->getBarangById('nama_barang', $id); ?>">
            <br>
            Jumlah barang yang baru : <input type="text" name="jumlah_barang" value="<?php echo $db->getBarangById('jumlah_barang', $id); ?>">
            <br>
            Harga barang yang baru : <input type="text" name="harga_barang" value="<?php echo $db->getBarangById('harga_barang', $id); ?>">
            <br>
            <input type="submit" value="SIMPAN" name="prosesUpdateBarang" value="UBAH">
        </div>
    </form>
    <a href="homepage.php">Home</a>
</body>
</html>