<?php 
include "db.php";

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
    <form action="db.php" method="POST">
        <div class="pensi">
            <input type="hidden" name="id_anggota" value="<?php echo $id; ?>">
            Nama Anggota Yang Baru : <input type="text" name="nama_anggota" value="<?php echo $db->getAnggotaById('nama_anggota', $id); ?>">
            <br>
            <input type="submit" value="SIMPAN" name="prosesUpdateAnggota" value="UBAH">
        </div>
    </form>
    <a href="perpus.php">Home</a>
</body>
</html>