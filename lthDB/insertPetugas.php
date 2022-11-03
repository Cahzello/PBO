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
            Nama Petugas : <input type="text"  name="nama_petugas">
            <br>
            Username : <input type="text"  name="username">
            <br>
            <input type="submit" value="SIMPAN" name="submitPetugas">

        </div>
    </form>
    <a href="perpus.php">Home</a>
</body>
</html>