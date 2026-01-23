<?php
// Memulai sesi dan koneksi ke database
session_start();

$host = 'localhost'; // Server database Anda
$dbname = 'absensi';
$username = 'root'; // Username MySQL Anda
$password = ''; // Password MySQL Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Proses registrasi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $userType = htmlspecialchars($_POST['userType']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Simpan data pengguna ke database
    $stmt = $pdo->prepare("INSERT INTO users (name, user_type, email, password) VALUES (:name, :userType, :email, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':userType', $userType);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $success_message = "Registrasi berhasil! Anda dapat login sekarang.";
    } else {
        $error_message = "Terjadi kesalahan. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna - Sistem Absensi Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .register-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4CAF50;
        }
        .register-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .register-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .register-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .register-box input,
        .register-box select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .register-box button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .register-box button:hover {
            background-color: #45a049;
        }
        .message {
            font-size: 14px;
            text-align: center;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <div class="register-box">
            <h2>Registrasi Pengguna</h2>
            <form method="POST" action="register.php">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama Anda" required>

                <label for="userType">Sebagai:</label>
                <select id="userType" name="userType" required>
                    <option value="">Pilih</option>
                    <option value="student">Siswa</option>
                    <option value="teacher">Guru</option>
                </select>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>

                <button type="submit">Daftar</button>

                <!-- Menampilkan pesan sukses atau error -->
                <?php if (isset($success_message)): ?>
                    <p class="message success"><?php echo $success_message; ?></p>
                <?php elseif (isset($error_message)): ?>
                    <p class="message error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>

</body>
</html>
