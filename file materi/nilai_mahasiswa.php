<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin-top: 10px;
        }

        .back-button {
            display: block;
            width: 10%;
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

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>INPUT NILAI MAHASISWA</h1>

    <form action="process_input.php" method="post">
        <label for="npm">NPM:</label>
        <input type="text" name="npm" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" required>

        <label for="fakultas">Fakultas:</label>
        <input type="text" name="fakultas" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="absen">Nilai Absen:</label>
        <input type="number" name="absen" required>

        <label for="tugas">Nilai Tugas:</label>
        <input type="number" name="tugas" required>

        <label for="uts">Nilai UTS:</label>
        <input type="number" name="uts" required>

        <label for="uas">Nilai UAS:</label>
        <input type="number" name="uas" required>

        <button type="submit">Hitung Nilai</button>
        <a href="../welcome.php" class="back-button">Kembali</a>
    </form>

</body>

</html>