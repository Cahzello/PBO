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
            Nama Anggota Yang Baru : <input type="text"  name="namaAnggotaBaru">
            <br>
            <input type="submit" value="SIMPAN" name="submitAnggotaBaru">

        </div>
    </form>
    <a href="perpus.php">Home</a>
</body>
</html>