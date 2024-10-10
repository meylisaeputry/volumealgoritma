<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
</head>
<body>

<h2>Selamat datang <h2><strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> <h4>di Program Project Perulangan Notasi Algoritma </h4>

<form method="GET" action="03 output perulangan nama .php">

  <label for="Input Perulangan Meylisa">Input Perulangan Meylisa:</label>
  <input type="text" id="Input Perulangan Meylisa" name="IInput Perulangan Meylisa" required><br><br>
  
  
  <input type="submit" value="Hasil Input">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$InputHariKerja = [
    'Input Perulangan Meylisa' => 'Meylisa Eka Putry',     

];
}









