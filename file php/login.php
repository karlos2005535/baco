<?php
session_start(); // Memulai sesi untuk menyimpan informasi login

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'user');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mencegah SQL Injection dengan prepared statements
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE username = ?");
    $stmt->bind_param("s", $username); // Bind parameter username
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Mengambil data pengguna
        $row = $result->fetch_assoc();
        // Memeriksa password
        if (password_verify($password, $row['password'])) {
            // Menyimpan sesi pengguna
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redirect ke halaman dashboard
            exit();
        } else {
            $error = "Username atau password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <a href="add_user.php">Buat akun</a>
</body>
</html>
