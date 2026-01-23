
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Absensi Kelas 10 RPL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        header img {
            width: 50px;
            height: auto;
            vertical-align: middle;
        }
        header h1 {
            display: inline;
            font-size: 24px;
            margin-left: 10px;
        }
        nav {
            background-color: #333;
            display: flex;
            justify-content: center; /* Memusatkan tautan */
        }
        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        main {
            padding: 20px;
            text-align: center;
            background-image: url(class.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
    </style>
</head>
<body>

    <header>
        <img src="bpm.jpg" alt="Logo">
        <h1>Selamat Datang di Sistem Absensi Kelas 10 RPL</h1>
    </header>

    <nav>
        <a href="home.php">Beranda</a>
        <a href="students.php">Absen Siswa</a>
        <a href="local_storage.php">Data Absen</a>
    </nav>

    <main>
        <div class="content">
            <h2>Absensi Kelas</h2>
            <p><?php echo $welcomeMessage; ?></p> <!-- Display welcome message -->
            <p>Gunakan sistem ini untuk mengabsen siswa kelas 10 RPL.</p>
            <p>&copy; 2024 RPL SMK BPM</p>
        </div>
    </main>

</body>
</html>