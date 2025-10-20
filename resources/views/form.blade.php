<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>input data mahasiswa</h2>
    <form action="/simpan" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label>
        <input type="text" name="nim"><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan"><br><br>

        <label>umur:</label>
        <input type="text" name="umur"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>