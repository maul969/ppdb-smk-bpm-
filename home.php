<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler SMK Bina Putra Mandiri</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="foto/logo bpm.png">
</head>
<body>
    <!-- === NAVBAR === -->
    <nav>
        <div class="logo">
            <img src="foto/logo bpm.png" alt="Logo Sekolah">
            <h2>SMK Bina Putra Mandiri</h2>
        </div>
    </nav>

    <!-- === BODY UTAMA === -->
    <div class="body">
        <div class="left">
            <div class="imgBox img1" onclick="scrollToSection('section-pmr')">
                <img src="foto/pmr.jpg" alt="PMR">
                <p>PMR</p>
            </div>
            <div class="imgBox img2">
                <img src="foto/latgab.jpg" alt="Info Sekolah">
                <p>Info Sekolah <strong>&gt;</strong></p>
            </div>
        </div>

        <div class="right">
            <div class="imgBox img3" onclick="scrollToSection('section-futsal')">
                <img src="foto/f.jpg" alt="Futsal">
                <p>Futsal</p>
            </div>
            <div class="imgBox img4" onclick="scrollToSection('section-tari')">
                <img src="foto/tari.jpg" alt="Tari">
                <p>Tari</p>
            </div>
        </div>
    </div>

    <!-- === SECTION DETAIL ESKUL === -->
    <section id="section-pmr">
        <div id="nav-pmr">
            <h1>Palang Merah Remaja (PMR)</h1>
        </div>
        <div id="container-pmr">
            <div id="text-pmr">
                <h1>Peduli, Siaga, dan Berbakti</h1>
                <p>PMR SMK Bina Putra Mandiri merupakan ekstrakurikuler yang mengajarkan kepedulian sosial, keterampilan pertolongan pertama, serta jiwa kemanusiaan. Melalui kegiatan pelatihan dan simulasi, anggota PMR dilatih untuk siap membantu sesama dalam situasi darurat.</p>
                <div id="small-images-pmr">
                    <img src="foto/pmr.jpg" alt="Kegiatan PMR 1">
                    <img src="foto/latgab.jpg" alt="Kegiatan PMR 2">
                </div>
            </div>
            <img id="main-image-pmr" src="foto/pmr.jpg" alt="PMR Utama">
        </div>
    </section>

    <section class="section-divider"></section>

    <section id="section-futsal">
        <div id="nav-futsal">
            <h1>Futsal</h1>
        </div>
        <div id="container-futsal">
            <div id="text-futsal">
                <h1>Kerjasama dan Sportivitas</h1>
                <p>Ekstrakurikuler futsal adalah tempat bagi siswa yang gemar olahraga dan ingin mengasah kemampuan dalam teamwork, strategi, serta kebugaran fisik. Siswa dilatih disiplin, fokus, dan sportif baik di lapangan maupun di luar.</p>
                <div id="small-images-futsal">
                    <img src="foto/f.jpg" alt="Futsal 1">
                    <img src="foto/f.jpg" alt="Futsal 2">
                </div>
            </div>
            <img id="main-image-futsal" src="foto/f.jpg" alt="Futsal Utama">
        </div>
    </section>

    <section class="section-divider"></section>

    <section id="section-tari">
        <div id="nav-tari">
            <h1>Tari Tradisional</h1>
        </div>
        <div id="container-tari">
            <div id="text-tari">
                <h1>Menjaga Warisan Budaya</h1>
                <p>Ekstrakurikuler Tari mengajak siswa untuk melestarikan budaya Indonesia melalui gerak dan irama. Selain belajar teknik menari, siswa juga memahami makna dan filosofi dari setiap tarian tradisional.</p>
                <div id="small-images-tari">
                    <img src="foto/tari.jpg" alt="Tari 1">
                    <img src="foto/tari.jpg" alt="Tari 2">
                </div>
            </div>
            <img id="main-image-tari" src="foto/tari.jpg" alt="Tari Utama">
        </div>
    </section>

    <!-- === FOOTER === -->
    <footer>
        <p>&copy; 2025 SMK Bina Putra Mandiri | Ekstrakurikuler</p>
    </footer>

    <script src="script/script.js"></script>
</body>
</html>
