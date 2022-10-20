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
            Nama Anggota : <input type="text"  name="nama_anggota">
            <br>
            <input type="submit" value="SIMPAN" name="submitAnggota">

        </div>
    </form>
    <a href="perpus.php">Home</a>
</body>
</html>