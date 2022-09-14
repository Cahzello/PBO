<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
    <style>
        .form {
            border: solid black 1px;
            width: 50%;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Form Anime Favorit</h1>
    <div class="form">
        <form action="waifu.php" method="POST">
            Anime 1 <br> <input type="text" name="anime1"><br>
            Anime 2 <br> <input type="text" name="anime2"><br>
            Anime 3 <br> <input type="text" name="anime3"><br>
            Anime 4 <br> <input type="text" name="anime4"><br>
            Anime 5 <br> <input type="text" name="anime5"><br>
            <br> <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>