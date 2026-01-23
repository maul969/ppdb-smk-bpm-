

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Absensi Kelas 10 RPL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #4CAF50;
        }
        .login-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .login-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .login-box input,
        .login-box select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-box button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <form id="loginForm" method="POST" action="">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama Anda" required>


                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>

                <button type="submit">Login</button>

                <?php if ($error_message): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>

</body>
</html>
