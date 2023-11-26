<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Segitiga</title>
    <link rel="stylesheet" href="styles.css">
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a.back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        a.back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <form action="ProsesHitungSegitiga.php" method="post">
        <h1>Hitung Luas Segitiga dan Sisi Miring</h1>
        Alas Segitiga : <br>
        <input type="text" name="alas" required><br>
        Tinggi Segitiga : <br>
        <input type="text" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
        <a href="../welcome.php" class="back-button">Kembali</a>
    </form>
</body>

</html>