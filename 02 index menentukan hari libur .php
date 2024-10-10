<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
</head>
<body>

<h2>Identifikasi Pengguna</h2>

<form method="GET" action="02 Proses menentukan hari libur nasional .php">

  <label for="Input Nama">Input Nama:</label>
  <input type="text" id="Input Nama" name="Input Nama" required><br><br>
  
  <label for="Input Email">Input Email:</label>
  <input type="Input Email" id="Input Email" name="Input Email" required><br><br>
  
  <input type="submit" value="Login">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
// Simulasi data pengguna yang terdaftar di sistem (untuk contoh ini hardcoded)
$username = [
    'user1' => 'Meylisa',     // Username: user1, Password: userpass
    'user2' => 'putrymeylisa315@gmail.com',     // Username: user1, Password: userpass

];
}

    // Validasi apakah username dan password sesuai
    if (isset($users[$username]) && $users[$username] === $password) {
        // Login berhasil
        echo "Login berhasil! Selamat datang, " . $username . ".";
    } 


if (isset($users[$username]) && $users[$username] === $password) {
    // Login berhasil, arahkan ke halaman beranda
    header("02 Proses menentukan hari libur nasional .php");
    exit();
}

?>
