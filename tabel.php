<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <H1>testing</H1>
    <table>
        <th>
            <tr>
                <td>No induk</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>No Telp</td>
            </tr>
        </th>
        <?php
        include "database.php";
        $query = mysqli_query($koneksi, 'SELECT * FROM datasiswa');
        while ($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['noinduk'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['nohandphone'] ?></td>
        </tr>  
        <?php } ?>
    </table>
</body>
</html>