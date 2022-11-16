<?php
include "database.php";
$data_pembelian = $db->readPembelian();

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
            <input type="hidden" name="id_pembelian" value="<?php echo $id; ?>">
            Nama barang Yang Baru : <input type="date" name="tanggal" value="<?php echo $db->getPembelianById('tanggal', $id); ?>">
            <br>
            <select name="namaBarang">
                <option value="">Pilih</option>
                <?php
                foreach ($data_pembelian as $data) {
                ?>
                    <option value="<?php echo $data['id_pembelian']; ?>"><?php echo $data['nama_barang']; ?></option>
                <?php
                }
                ?>
            </select>
            <br>
            Jumlah barang yang baru : <input type="number" name="quantity" value="<?php echo $db->getPembelianById('quantity', $id); ?>">
            <br>
            <input type="submit" value="SIMPAN" name="prosesUpdatePembelian" value="UBAH">
        </div>
    </form>
    <a href="index.php">Home</a>
</body>

</html>