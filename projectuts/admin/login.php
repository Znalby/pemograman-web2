<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f6e58d; /* Warna latar belakang */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
    }

    .login-container {
        background-color: #f9ca24; /* Warna latar belakang kontainer */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        width: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .login-container:hover {
        transform: translateY(-5px);
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: none;
    }

    .login-container button[type="submit"] {
        width: calc(100% - 40px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #f0932b; /* Warna tombol submit */
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-container button[type="submit"]:hover {
        background-color: #d67c00; /* Warna saat tombol submit dihover */
    }
</style>
</head>

<?php
session_start();

// Data pengguna yang valid
$valid_email = "zen@gmail.com";
$valid_password = "123";

// Periksa apakah formulir login telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah email dan password cocok
    if ($_POST["email"] == $valid_email && $_POST["password"] == $valid_password) {
        // Autentikasi berhasil, set session dan redirect ke halaman selanjutnya
        $_SESSION["email"] = $_POST["email"];
        header("Location: admin.php");
        exit;
    } else {
        // Autentikasi gagal, tampilkan pesan error
        $error_message = "Email atau password salah.";
    }
}
?>

<body>
    <div class="login-container">
        <form action="" method="POST">
            <div>
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
