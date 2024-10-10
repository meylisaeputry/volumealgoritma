<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
</head>
<body>

 <h2>Selamat datang <h2><strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> <h4>di Program Project Percabangan Notasi Algoritma </h4>


<form method="GET" action="02 output menentukan hari libur nasional.php">

  <label for="Input Hari Libur Kerja">Input Hari Libur Kerja:</label>
  <input type="text" id="Input Hari Libur Kerja" name="Input Hari Libur Kerja" required><br><br>
  
  
  <input type="submit" value="Hasil Input">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$InputHariKerja = [
    'Input Hari Libur Kerja' => 'Hari libur kerja 2024',     

];
}