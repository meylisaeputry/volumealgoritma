<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
</head>

</head>

<body>

  
    <h2>Selamat datang <h2><strong style="-webkit-text-fill-color: blue; text-transform:uppercase"></strong> <h4>di Program Project Perurutan Notasi Algoritma </h4>


<form method="POST" action="01 Output volume Balok .php">
  <label for="Masukkan Nilai P">Masukkan Nilai P:</label><br>
  <input type="text" id="Masukkan Nilai P" name="Masukkan Nilai P" required><br><br>
  
  <label for="Masukkan Nilai L">masukkan Nilai L:</label><br>
  <input type="Masukkan Nilai L" id="Masukkan Nilai L" name="Masukkan Nilai L" required><br><br>
  
  <label for="Masukkan Nilai T">masukkan Nilai T:</label><br>
  <input type="Masukkan Nilai T" id="Masukkan Nilai T" name="Masukkan Nilai L" required><br><br>
  
  <input type="submit" value="Hitung volume balok">
</form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$MasukkanNilaiP = [
    'Nilai P' => '5',  
    'Nilai L' => '4',  
    'Nilai T' => '3',    

];
}

?>
