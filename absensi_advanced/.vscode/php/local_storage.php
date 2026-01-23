<?php
session_start();

if (!isset($_SESSION['attendanceData'])) {
    $_SESSION['attendanceData'] = [
        "Abdul Syahril Pratama" => true,
        "Dimas Surya Putra" => false,
        "Emre Razaq" => true,
        "Farel Afandi" => true,
        "Feliscya Agatha Susanto Lie" => false,
        "Fiqih Alfarizi" => true,
        "Iskandar Ibrahim" => true,
        "Marchel Hugo Putra Ramadhan" => false,
        "Maulidan Alif Wicaksono" => true,
        "Melvin Olivia" => true,
        "Kartika Dewi" => true,
        "Mochammad Irfan Ardiansyah" => false,
        "Muhammad Fahri Tri Gunawan" => true,
        "Muhammad Farel Andriani" => true,
        "Muhammad Ihwan Utomo" => false,
        "Novita Damayanti" => true,
        "Nurlita" => true,
        "Oktapia Nurpadilah" => false,
        "Putra Kasela" => true,
        "Ramadhan Agil Siraj" => true,
        "Reyvan Darmawan" => false,
        "Rina Rusliana" => true,
        "Robiyatun Nisa" => true,
        "Saka Novagio" => false,
        "Siti Nur Kholisa" => true,
        "Sugiarto Raharjo" => true,
        "Umar Hafidz" => true
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_SESSION['attendanceData'] as $name => &$present) {
        $present = isset($_POST[$name]) ? true : false;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Kelas - Kelas 10 RPL</title>
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

        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
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
        }

        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            width: 80%;
            margin: 20px auto;
        }

        .symbol {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Absensi Kelas 10 RPL</h1>
    </header>

    <nav>
        <a href="test_absensi.html">Beranda</a>
        <a href="students.html">Daftar Murid</a>
    </nav>

    <main>
        <div class="content">
            <h2>Absensi Kelas</h2>
            <form method="POST" action="">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Kehadiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($_SESSION['attendanceData'] as $name => $present) {
                            echo "< <tr>
                            <td>{$no}</td>
                            <td>{$name}</td>
                            <td>
                                <input type='checkbox' name='{$name}' " . ($present ? 'checked' : '') . ">
                            </td>
                        </tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <button type="submit">Simpan Kehadiran</button>
            </form>
        </div>
    </main>

</body>
</html>