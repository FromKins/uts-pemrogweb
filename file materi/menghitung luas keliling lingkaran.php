<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Lingkaran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <form action="ProsesHitungLingkaran.php" method="post">
        <h1>Hitung Luas dan Keliling Lingkaran</h1>
        Jari-jari Lingkaran : <br>
        <input type="text" name="jari_jari" required><br><br>
        <input type="submit" value="Hitung">
        <a href="../welcome.php" class="back-button">Kembali</a>
    </form>
</body>

</html>