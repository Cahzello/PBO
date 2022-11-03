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
            Nama Barang : <input type="text"  name="nama_barang">
            <br>
            Total Barang : <input type="number"  name="total_barang">
            <br>
            Harga : <input type="number"  name="harga">
            <br>
            <input type="submit" value="SIMPAN" name="submitBarang">
            <br>
            <a href="homepage.php">Home</a>
            
        </div>
    </form>
</body>
</html>