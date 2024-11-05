<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset ('gambar/lsp.png') }}">
    <title>Lembaga Sertifikasi Profesi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/tempat.css') }}">

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
                    <li><a href="{{ route('tempat-uji') }}" class="active">Tempat Uji Kompetensi</a></li>
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


    <h1 style="text-align:center ;">Tempat Uji Kompetensi</h1>
    <div class="container">
        <div class="card">
            <img src="{{ asset('gambar/fab_lab.jpeg') }}" alt="Junior Office Specialist">
            <div class="card-content">
                <h3>Junior Office Specialist</h3>
                <p>Jl. Meruya Ilir Raya, Komplek Taman Kebun Jeruk A II/1, Lantai 8, Jakarta Barat, 11650
                    TUK Aktif (Validasi LSP Signal Informatika Teknindo)</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/cloud9.jpeg') }}" alt="Junior Mobile Programmer">
            <div class="card-content">
                <h3>Junior Mobile Programmer</h3>
                <p>Komplek Ruko Plaza Indah Bogor B-2
                    Jl. KH. Sholeh Iskandar - Kedungbadak, Kota Bogor, 16164
                    TUK Aktif (Validasi LSP Signal Informatika Teknindo)</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('gambar/mega.jpg') }}" alt="Junior Web Developer">
            <div class="card-content">
                <h3>Junior Web Developer</h3>
                <p>JJl. Mega Mendung III Blok E2 No. 15, Kota Bogor, Jawa Barat
                    TUK Aktif (Validasi LSP Signal Informatika Teknindo)</p>
            </div>
        </div>
    </div>


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
