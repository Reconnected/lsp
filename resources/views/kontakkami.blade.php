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
    <link rel="stylesheet" href="{{ asset('style/kontak.css') }}">

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
                </ul>
            </div>

            <a href="{{ route('Kerja-Sama') }}">Kerjasama</a>
            <a href="{{ route('kontakkami') }}" class="active">Kontak kami</a>
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

    <!-- Kontak Kami Section -->
    <div class="kontak-container">
        <!-- Kartu Kontak Kiri -->
        <div class="kontak-card">
            <h2>Kontak</h2>
            <p>Jika Anda memiliki pertanyaan lebih lanjut mengenai LSP Signal Informatika Teknindo atau program yang
                kami tawarkan, silahkan menghubungi kami:</p>
            <div class="divider"></div>
            <div class="kontak-info">
                <p><i class="fas fa-map-marker-alt"></i> Plaza Indah Bogor Blok.B2, Jl. Sholeh Iskandar, RT.04/RW.09,
                    Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164</p>
                <p><i class="fas fa-phone-alt"></i> +62 858-8556-4596</p>
                <p><i class="fas fa-envelope"></i> admin@lspsignal.id</p>
                <a href="https://wa.me/6282117239935?text=Halo,%20saya%20ingin%20bertanya%20tentang%20program%20LSP%20Informatika%20Signal%20Teknindo"
                    class="whatsapp-link"><i class="fab fa-whatsapp"></i> Hubungi via WhatsApp</a>
                <button class="pesan-button" onclick="openPopup()">Pesan</button> <!-- New button -->
            </div>
        </div>
    </div>

    <!-- Pop-up Modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Pesan</h2>
            <form method="POST" action="{{ route('pesans.store') }}" onsubmit="playTingSound(event)">
                @csrf
                <div>
                    <label for="nama">Name:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="alamat">Address:</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                <div>
                    <label for="no_telepon">Phone Number:</label>
                    <input type="tel" id="no_telepon" name="no_telepon" required>
                </div>
                <div>
                    <label for="pesan">Message:</label>
                    <textarea id="pesan" name="pesan" required></textarea>
                </div>
                <button type="submit">Create Pesan</button>
            </form>
            
        </div>
    </div>
    
    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block"; // Show the pop-up
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none"; // Hide the pop-up
        }

        // Close the pop-up when clicking outside of it
        window.onclick = function(event) {
            const popup = document.getElementById("popup");
            if (event.target == popup) {
                popup.style.display = "none"; // Hide the pop-up
            }
        }

        // Handle form submission
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission
            // Close the popup after submission
            closePopup();
        });
    </script>

    <script>
        // Fungsi untuk mendeteksi apakah elemen dalam viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fungsi untuk memeriksa semua elemen dengan kelas .kontak-card
        function checkCardsInView() {
            const cards = document.querySelectorAll('.kontak-card');
            cards.forEach(card => {
                if (isInViewport(card)) {
                    card.classList.add('show'); // Menambahkan kelas 'show' ketika elemen muncul di layar
                }
            });
        }

        // Jalankan pemeriksaan setiap kali halaman di-scroll
        window.addEventListener('scroll', checkCardsInView);
        // Jalankan pemeriksaan saat halaman dimuat
        window.addEventListener('load', checkCardsInView);
    </script>



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
                <p><span>Komplek Ruko Plaza Indah Bogor B-2 Jl. KH.</span> Sholeh Iskandar - Kedungbadak, Kota Bogor.
                </p>
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
                <a href="https://wa.me/6285885564596?text=Halo%2C%20saya%20ingin%20mengirimkan%20file%20pendaftaran%20saya.%20Silakan%20tunggu%20sejenak%20saat%20saya%20menguploadnya."
                    aria-label="WhatsApp" target="_blank">
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
