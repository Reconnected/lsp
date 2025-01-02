<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset ('../gambar/lsp.png') }}">
    <title>Lembaga Sertifikasi Profesi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/info.css') }}">

    <style>
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }
        #loading-overlay.hidden {
            opacity: 0;
            visibility: hidden;
        }
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <!-- Loading Overlay -->
    <div id="loading-overlay">
        <div class="spinner"></div>
    </div>
    <header>
        <a href="{{ url('home') }}" class="logo">
            <img src="{{ asset('gambar/lsp.png') }}" alt="Logo Perusahaan">
            <div class="logo-text">
                <h1>Lembaga Sertifikasi Profesi</h1>
                <h2>Informatika Signal Teknindo</h2>
            </div>
        </a>

        <nav>
            <a href="{{ route('home') }}">Beranda</a>

            <!-- Tentang Kami Dropdown -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Tentang kami ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('tentang.kami') }}">Profil</a></li>
                    <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                    <li><a href="{{ route('pengurus-LSP') }}">Pengurus LSP</a></li>
                    <li><a href="{{ route('Asesor') }}">Asesor</a></li>
                </ul>
            </div>

            <a href="{{ route('informasi') }}">Informasi</a>

            <!-- Sertifikasi Dropdown -->
            <div class="dropdown">
                <a href="#home" class="dropdown-toggle">Sertifikasi ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('Skema-Sertifikasi') }}">Skema Sertifikasi</a></li>
                    <li><a href="{{ route('tempat-uji') }}">Tempat Uji Kompetensi</a></li>
                    <li><a href="{{ route('File-Download') }}">Download</a></li>
                </ul>
            </div>

            <a href="{{ route('Kerja-Sama') }}">Kerjasama</a>
            <a href="{{ route('kontakkami') }}">Kontak kami</a>
            <a href="https://edukasi4.id/" class="edukasi-button">Edukasi 4 ID </a>
        </nav>

        <div class="date" id="currentDate"></div>

        <!-- Button for Mobile Nav -->
        <button class="mobile-nav-toggle" aria-label="Toggle navigation">☰</button>
    </header>
    <script>
        // Toggle mobile navigation
        document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
            document.querySelector('nav').classList.toggle('active');
        });

        document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});

window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loading-overlay').classList.add('hidden');
            }, 1500); // Adjust this value to control how long the loading screen shows
        });
    </script>
    </script>

    <section class="informasi">
        <div class="header">
            <img src="{{ asset('gambar/skil.jpg') }}" alt="Profile Picture">
        </div>
        <div class="content">
            <h1>Sertifikasi Kompetensi Penting untuk Kamu</h1>
            <p>Pengertian dari sertifikasi kompetensi adalah suatu pengakuan terhadap tenaga kerja yang memiliki keterampilan, pengetahuan, dan sikap kerja sesuai dengan standar kompetensi yang dipersyaratkan.</p>
            <p>Dengan adanya sertifikasi ini, tenaga kerja atau pemilik sertifikat dijamin memiliki kredibilitas kerja yang sesuai dengan tugas dan tanggung jawabnya.</p>
            <p>Sertifikasi profesional juga merupakan sertifikasi kerja yang dibutuhkan untuk mendapatkan atau meningkatkan kompetensi di bidang tertentu. Sertifikasi ini dikeluarkan oleh Lembaga Sertifikasi Profesi (LSP) yang sudah diakreditasi oleh Badan Nasional Sertifikasi Profesi (BNSP).</p>
            <p>Dalam persaingan industri dan ketenagakerjaan yang ketat, sertifikasi kompetensi menjadi sangat penting. Sertifikat ini menunjukkan bahwa seseorang berkompeten di bidangnya, memudahkan perusahaan dalam memilih pekerja yang sesuai dengan kebutuhan.</p>
            <p>Sertifikasi BNSP harus dimiliki untuk meningkatkan kredibilitas dalam bidang pekerjaan. Sertifikat ini bermanfaat untuk mengukur kemampuan di bidang tertentu, membantu pekerja memahami batasan dan kekurangannya, serta meningkatkan kemampuan agar tetap bersaing.</p>
            <p>Dengan sertifikat BNSP, kemampuan Anda diakui oleh penguji yang berkompeten, yang akan menambah nilai positif saat melamar di suatu perusahaan. Hal ini juga meningkatkan kepercayaan diri, yang berpengaruh pada hasil kerja yang lebih baik.</p>
            <p>Sertifikat kompetensi ini diakui secara global, yang akan meningkatkan peluang untuk bekerja di perusahaan bonafide, sekaligus memperkuat penilaian perusahaan terhadap Anda dibandingkan pekerja yang tidak memiliki sertifikat.</p>
    
            <h2>Sertifikasi Kompetensi Meningkatkan Profesionalisme Kerja</h2>
            <p>Selain hanya untuk memperlancar urusan administrasi dan memudahkan perusahaan dalam memilah serta menyaring pekerjanya, berikut beberapa alasan pentingnya memiliki sertifikat profesi baik bagi perusahaan maupun karyawan:</p>
    
            <ol>
                <li>Karyawan memahami standar dalam melakukan pekerjaan yang baik sesuai bidangnya. Sebelum mendapatkan sertifikat kompetensi kerja, pekerja harus mengikuti pelatihan untuk bekerja dengan baik dan profesional.</li>
                <li>Karyawan memiliki nilai jual dan daya saing yang tinggi. Ketika seorang pekerja memiliki sertifikat profesi, perusahaan akan lebih mempertimbangkannya.</li>
                <li>Jenjang karir seorang pekerja menjadi lebih baik. Biasanya, untuk memperlancar karir, seorang pekerja harus memiliki sertifikat kompetensi kerja agar perusahaan lebih yakin.</li>
                <li>Perusahaan akan meningkatkan produktivitasnya jika mempekerjakan karyawan yang sudah berkompetensi di bidangnya, sehingga pekerjaan dapat diselesaikan dengan standar berkualitas.</li>
                <li>Kesalahan kerja akan berkurang. Pekerja yang memiliki sertifikat profesi cenderung lebih profesional, sehingga kesalahan kerja akan lebih jarang terjadi.</li>
            </ol>
            <p><strong>Sumber: BNSP</strong></p>
        </div>
    
        <div class="publication-details">
            <p>Published on: <strong>04 October 2024</strong></p>
            <p>Publisher: <strong>Rishqi</strong></p>
        </div>
    </section>
    



    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="footer-map">
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d368.349598346712!2d106.79010131913942!3d-6.561388742766948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c416cbdea47b%3A0x9cc185c252b63a14!2sPT%20Bonet%20Utama%20(Internet%20Bogor)!5e1!3m2!1sid!2sid!4v1728368202127!5m2!1sid!2sid"
                        width="450" height="160" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>

            <!-- Moving the company name to a new div -->
            <div class="footer-company-name-container">
                <div class="footer-line"></div> <!-- Line above the company name -->
                <p class="footer-company-name"
                    style="font-size: 15px; color: #fff; margin: 10px 0; font-weight: 400; letter-spacing: 0.5px; opacity: 0.8;">
                    © 2024 LSP SIGNAL - All Rights Reserved
                </p>
            </div>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Komplek Ruko Plaza Indah Bogor B-2 Jl. KH.</span> Sholeh Iskandar - Kedungbadak, Kota Bogor.</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+62 858-8556-4596</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="admin@lspsignal.id">admin@lspsignal.id</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the LSP</span>
                Certifying Excellence, Empowering Competence.
            </p>

            <div class="footer-icons">
                <a href="https://www.facebook.com/profile.php?id=61566548993121&locale=id_ID" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://wa.me/6285885564596?text=Halo%2C%20saya%20ingin%20mengirimkan%20file%20pendaftaran%20saya.%20Silakan%20tunggu%20sejenak%20saat%20saya%20menguploadnya." aria-label="WhatsApp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>         
                <a href="https://www.instagram.com/lsp.signal/" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

    </footer>

</body>

</html>
