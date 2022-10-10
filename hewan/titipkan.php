<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titipkan</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<<<<<<< HEAD
    <form method="post" action="">
=======
    <form action="POST">
>>>>>>> fb319123770a1ed327ad1be236edccc891b02822
        <h1>Penitipan Hewan</h1>
        <table>
            <tr>
                <td>Nama Pemilik</td>
                <td>: <input type="text" value="<?php echo $_GET['nama'] ?>"></td>
            </tr>
            <tr>
                <td>No Pemilik</td>
                <td>: <input type="text" value="<?php echo $_GET['no'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Hewan</td>
                <td>: <input type="text" name="jenisnya" value="<?php echo $_GET['namaHewan'] ?>"></td>
            </tr>
            <tr>
                <td>Ciri Hewan</td>
                <td>: <input type="text" value="<?php echo $_GET['ciri'] ?>"></td>
            </tr>
            <tr>
                <td>Lama Penitipan (per harinya)</td>
                <td>: <input type="text" name="lama"></td>
            </tr>
            <tr>
                <td></td>
                <td>&nbsp;&nbsp;<input type="Submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

if ($_POST){
    $lama = $_POST['lama'];
    $jenis = $_POST['jenisnya'];
    $total = 100000 * intval($lama);
    echo "Anda menitipkan " . $jenis . " ini selama " . $lama . " dengan biaya penitipan perharinya Rp. 100.000. <br>" . "Total Menjadi " . $total;
}

?>