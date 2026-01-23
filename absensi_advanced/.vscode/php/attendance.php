<header>
    <h1>Absensi Kelas 10 RPL</h1>
</header>

<nav>
    <a href="test absensi.html">Beranda</a>
    <a href="students.html">Daftar Murid</a>
    <a href="local storage.html">Data Absen</a>
</nav>

<main>
    <div class="content">
        <h2>Absensi Kelas</h2>
        <form id="attendanceForm" method="POST" action="">
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
                    $students = [
                        "Abdul Syahril Pratama",
                        "Dimas Surya Putra",
                        "Emre Razaq",
                        "Farel Afandi",
                        "Feliscya Agatha Susanto Lie",
                        "Fiqih Alfarizi",
                        "Iskandar Ibrahim",
                        "Marchel Hugo Putra Ramadhan",
                        "Maulidan Alif Wicaksono",
                        "Melvin Olivia",
                        "Mochammad Irfan Ardiansyah",
                        "Muhammad Fahri Tri Gunawan",
                        "Muhammad Farel Andriani",
                        "Muhammad Ihwan Utomo",
                        "Novita Damayanti",
                        "Nurlita",
                        "Oktapia Nurpadilah",
                        "Putra Kasela",
                        "Ramadhan Agil Siraj",
                        "Reyvan Darmawan",
                        "Rinda Rusliana",
                        "Robiyatun Nisa",
                        "Saka Novagio",
                        "Siti Nur Kholisa",
                        "Sugiarto Raharjo",
                        "Umar Hafidz"
                    ];

                    foreach ($students as $index => $student) {
                        echo "<tr>
                                <td>" . ($index + 1) . "</td>
                                <td>$student</td <td><input type='checkbox' name='attendance" . ($index + 1) . "'></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit">Submit</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="attendance-results">
                <h3>Hasil Absensi</h3>
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
                        foreach ($attendanceData as $key => $status) {
                            echo "<tr>
                                    <td>$key</td>
                                    <td>" . $students[$key - 1] . "</td>
                                    <td>$status</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</main>