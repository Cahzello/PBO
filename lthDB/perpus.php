<?php

include 'db.php';

$data_anggota = $db->readAnggota();

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
    <table border="1" cellpadding="5px" align="center">
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
            <td><?php echo $i; ?></td>
            <td><?php echo $i; ?></td>
            <td><?php echo $i; ?></td>
            <td><?php echo $i; ?></td>
        </tr>

    </table>
</body>
</html>