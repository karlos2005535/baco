<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'user');

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menangkap input dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Mengecek jika password dan konfirmasi password cocok
    if ($password === $password_confirm) {
        // Meng-hash password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Menambahkan pengguna baru ke database menggunakan prepared statement
        $stmt = $conn->prepare("INSERT INTO tb_user (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            $success = "Pengguna berhasil ditambahkan!";
        } else {
            $error = "Gagal menambahkan pengguna: " . $stmt->error;
        }
    } else {
        $error = "Password dan konfirmasi password tidak cocok!";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
</head>
<body>
    <h2>Tambah Pengguna Baru</h2>

    <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirm">Konfirmasi Password:</label>
        <input type="password" id="password_confirm" name="password_confirm" required><br><br>

        <input type="submit" value="Tambah Pengguna">
    </form>
    <a href="dashboard.php">login</a>
</body>
</html>
