<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('gambar/lsp.png') }}">
    <title>Lembaga Sertifikasi Profesi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('style/css.css') }}">

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
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
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
                <h1>LSP Signal</h1>
                <h2>Informatika Teknindo</h2>
            </div>
        </a>

        <nav>
            <a href="{{ route('home') }}" class="active">Beranda</a>

            <!-- Tentang Kami Dropdown -->
            <div class="dropdown">
                <a href="#Tentang Kami" class="dropdown-toggle">Tentang kami ▼</a>
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
                <a href="#sertifikasi" class="dropdown-toggle">Sertifikasi ▼</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('Skema-Sertifikasi') }}">Skema Sertifikasi</a></li>
                    <li><a href="{{ route('tempat-uji') }}">Tempat Uji Kompetensi</a></li>
                    <li><a href="{{ route('File-Download') }}">Download</a></li>
                </ul>
            </div>

            <a href="{{ route('Kerja-Sama') }}">Kerjasama</a>
            <a href="{{ route('kontakkami') }}">Kontak kami</a>

            <!-- New Edukasi 4 ID Button -->
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


    <!-- Banner Slider Section -->
    <section class="banner-slider">
        <div class="slide active">
            <img src="{{ asset('gambar/HeaderWeb1.jpg') }}" alt="Banner 1">
            <div class="banner-text">
                <h1>LSP Signal Informatika Teknindo</h1>
                <p>LSP Informatika Signal Teknindo, sebagai sebuah lembaga sertifikasi,<br> akan terus menjaga
                    kepercayaan dari industri, pemerintah, dan masyarakat.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="{{ asset('gambar/HeaderWeb2.jpg') }}" alt="Banner 2">
            <div class="banner-text">
                <h1>Buktikan Kompetensi<br>
                    dengan Sertifikasi </h1>
                <p>Sertifikat berfungsi sebagai bukti bahwa seseorang memiliki keterampilan khusus. Dengan memiliki
                    sertifikat tersebut, <br>pencari kerja akan memiliki daya saing yang lebih tinggi, serta peluang
                    promosi yang sesuai.

                </p>
            </div>
        </div>
        <div class="navigation">
            <span class="nav-button" onclick="changeSlide(0)"></span>
            <span class="nav-button" onclick="changeSlide(1)"></span>
        </div>
    </section>


    <section class="about-us">
        <div class="about-content">
            <div class="about-image fade-in">
                <img src="{{ asset('gambar/signal.jpg') }}" alt="Tentang Kami">
            </div>
            <div class="about-text fade-in">
                <h2>Tentang Kami</h2>
                <p>LSP Signal Informatika Teknindo adalah lembaga sertifikasi profesi yang berfokus pada pengembangan
                    keterampilan dan sertifikasi kompetensi. Kami bekerja sama dengan berbagai industri untuk
                    meningkatkan daya saing tenaga kerja dan menciptakan standar yang diakui secara nasional maupun
                    internasional.</p>
                <p>Dengan komitmen tinggi, kami berusaha menjaga kualitas, transparansi, dan profesionalisme dalam
                    setiap layanan sertifikasi yang kami tawarkan.</p>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fadeElements = document.querySelectorAll('.fade-in');

            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1 // Menentukan seberapa banyak elemen yang terlihat sebelum animasi dimulai
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(
                            'active'); // Menambahkan kelas aktif untuk memicu animasi
                        observer.unobserve(entry
                            .target); // Menghentikan pengamatan setelah elemen muncul
                    }
                });
            }, options);

            fadeElements.forEach(element => {
                observer.observe(element); // Memulai pengamatan untuk setiap elemen
            });
        });
    </script>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const navButtons = document.querySelectorAll('.nav-button');

        function changeSlide(index) {
            slides[currentSlide].classList.remove('active');
            navButtons[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            navButtons[currentSlide].classList.add('active');
        }

        // Auto-slide functionality
        setInterval(() => {
            let nextSlide = (currentSlide + 1) % slides.length;
            changeSlide(nextSlide);
        }, 5000); // Slide every 5 seconds
    </script>

    <script>
        < script >
            document.addEventListener('DOMContentLoaded', function() {
                const aboutSection = document.querySelector('.about-us');

                // Create an Intersection Observer
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            aboutSection.classList.add('visible'); // Add the visible class when in view
                            observer.unobserve(aboutSection); // Stop observing once animated
                        }
                    });
                }, {
                    threshold: 0.1
                }); // Adjust threshold as needed

                observer.observe(aboutSection); // Start observing the about section
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const aboutSection = document.querySelector('.about-us');

            // Create an Intersection Observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        aboutSection.classList.add('visible'); // Add the visible class when in view
                        observer.unobserve(aboutSection); // Stop observing once animated
                    }
                });
            }, {
                threshold: 0.1
            }); // Adjust threshold as needed

            observer.observe(aboutSection); // Start observing the about section
        });
    </script>

    </script>

    <section class="news">
        <h2>Sertifikasi Kami</h2>
        <div class="card-container">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Skema Sertifikasi</h3>
                    </div>
                    <div class="card-back">
                        <a href="{{ route('Skema-Sertifikasi') }}" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Tempat Uji Kompetensi</h3>
                    </div>
                    <div class="card-back">
                        <a href="{{ route('tempat-uji') }}" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <h3>Alur Proses Sertifikasi </h3>
                    </div>
                    <div class="card-back">
                        <a href="https://drive.google.com/file/d/1MPNFRWCQY7DATLZycb9RbQ-wKtXOTEAr/view"
                            class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const newsSection = document.querySelector('.news');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        newsSection.classList.add('visible');
                        observer.unobserve(newsSection); // Stop observing once visible
                    }
                });
            });

            observer.observe(newsSection);
        });
    </script>


    <section>
        <div class="about-text">
            <center>
                <h2>Our Values</h2>
            </center>
            <div class="values">
                <div class="value-item">
                    <i class="fas fa-award"></i>
                    <h3>Profesional</h3>
                    <p>Bertekad menjadi lembaga yang bermutu tinggi dan konsisten dalam pelaksanaan asesmen secara
                        profesional, objektif dan independen tanpa ada keberpihakan.</p>
                </div>
                <div class="value-item">
                    <i class="fas fa-briefcase"></i>
                    <h3>Kualitas</h3>
                    <p>Berkomitnya untuk menerapkan proses asesmen sesuai pedoman BNSP 201 dan 202</p>
                </div>
                <div class="value-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Pertanggungjawaban</h3>
                    <p>Meningkatnya kepercayaan masyarakat industri dan membantu meningkatkan kualitas SDM yang kompeten
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const valueItems = document.querySelectorAll('.value-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        // Delay the visibility of each item based on its index
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 200); // Delay for each item (200ms for each item)
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            });

            valueItems.forEach(item => {
                observer.observe(item);
            });
        });
    </script>

    <div class="container">
        <center>
            <h1>More than 1 Years of Experience</h1>
        </center>
        <div class="stats">
            <div class="stat-item">
                <h2>{{ $schools }}</h2>
                <p>Sekolah</p>
            </div>
            <div class="stat-item">
                <h2>{{ $universities }}</h2>
                <p>Universitas</p>
            </div>
            <div class="stat-item">
                <h2>{{ $asesors }}</h2>
                <p>Assesor</p>
            </div>
            <div class="stat-item">
                <h2>{{ $asesis }}</h2>
                <p>Asesi</p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statItems = document.querySelectorAll('.stat-item');

            function countUp(element) {
                const target = parseInt(element.innerText, 10); // Get the target number
                let count = 0; // Start counting from 0
                const increment = Math.ceil(target / 200); // Adjust increment to control speed
                const intervalTime = 50; // Increase the interval time to slow down the counting
                let hasCounted = false; // Flag to check if counting has already happened

                const interval = setInterval(() => {
                    if (!hasCounted) { // Only count if it hasn't counted yet
                        count += increment; // Increment count
                        element.innerText = count; // Update the displayed number

                        if (count >= target) {
                            clearInterval(interval); // Stop the counting when target is reached
                            element.innerText = target; // Ensure it displays the exact target
                            hasCounted = true; // Set the flag to true
                        }
                    }
                }, intervalTime); // Adjust interval timing as needed
            }

            function handleScroll() {
                statItems.forEach((item) => {
                    const rect = item.getBoundingClientRect();
                    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                        item.classList.add('visible'); // Add visible class to trigger animation
                        const numberElement = item.querySelector('h2'); // Get the number element

                        // Only start counting if it hasn't counted yet
                        if (!numberElement.classList.contains('counted')) {
                            countUp(numberElement); // Start the counting animation
                            numberElement.classList.add('counted'); // Mark it as counted
                        }
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Call on initial load to check if any items are visible
        });
    </script>

    <!-- Sasaran Mutu dan Strategi Section -->
    <section class="sasaran-mutu">
        <div class="container">
            <center>
                <h1>Sasaran Mutu & Strategi</h1>
            </center>
            <div class="strategi-items">
                <div class="strategi-item">
                    <i class="fas fa-bullseye"></i>
                    <h3>Sasaran Mutu</h3>
                    <p>Kami berkomitmen untuk menyediakan layanan sertifikasi yang berkualitas dengan target mencapai
                        tingkat kepuasan pelanggan sebesar 90% setiap tahun.</p>
                </div>
                <div class="strategi-item">
                    <i class="fas fa-tasks"></i>
                    <h3>Strategi</h3>
                    <p>Untuk mencapai sasaran mutu, kami menerapkan standar asesmen yang transparan, memberikan
                        pelatihan berkelanjutan kepada tenaga assesor, dan membangun kerjasama strategis dengan industri
                        terkait.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const strategiItems = document.querySelectorAll('.strategi-item'); // Select all items

            function handleScroll() {
                strategiItems.forEach((item, index) => {
                    const itemRect = item.getBoundingClientRect(); // Get the item's bounding rect

                    // Check if the item is visible
                    if (itemRect.top >= 0 && itemRect.bottom <= window.innerHeight) {
                        // Add visible class with a staggered delay based on the index
                        setTimeout(() => {
                            item.classList.add('visible'); // Add visible class to trigger animation
                        }, index * 300); // Adjust the multiplier for speed (300ms per item)
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Call on initial load to check if the items are visible
        });
    </script>


    <!-- Informasi Section -->
    <section class="informasi">
        <div class="container">
            <center>
                <h1>Informasi</h1>
            </center>
            <div class="informasi-items">
                <!-- Informasi Card 1 -->
                <a href="{{ route('profesi') }}" class="informasi-item-link">
                    <div class="informasi-item">
                        <div class="informasi-image">
                            <img src="{{ asset('gambar/profesi.jpg') }}" alt="Informasi Image 1">
                        </div>
                        <div class="informasi-content">
                            <h3>Sertifikasi Profesi di Mata Dunia</h3>
                            <div class="informasi-meta">
                                <i class="far fa-calendar-alt"></i>
                                <span>November 8, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Informasi Card 2 -->
                <a href="{{ route('Badan-Nasional') }}" class="informasi-item-link">
                    <div class="informasi-item">
                        <div class="informasi-image">
                            <img src="{{ asset('gambar/sertifikasi.jpg') }}" alt="Informasi Image 2">
                        </div>
                        <div class="informasi-content">
                            <h3>Badan Nasional Sertifikasi Profesi (BNSP)</h3>
                            <div class="informasi-meta">
                                <i class="far fa-calendar-alt"></i>
                                <span>November 15, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Informasi Card 3 -->
                <a href="{{ route('Dasar-Hukum') }}" class="informasi-item-link">
                    <div class="informasi-item">
                        <div class="informasi-image">
                            <img src="{{ asset('gambar/hukum.jpg') }}" alt="Informasi Image 3">
                        </div>
                        <div class="informasi-content">
                            <h3>Dasar Hukum BNSP dan LSP</h3>
                            <div class="informasi-meta">
                                <i class="far fa-calendar-alt"></i>
                                <span>November 20, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Informasi Card 4 -->
                <a href="{{ route('Sertifikasi-Kompetensi') }}" class="informasi-item-link">
                    <div class="informasi-item">
                        <div class="informasi-image">
                            <img src="{{ asset('gambar/skil.jpg') }}" alt="Informasi Image 4">
                        </div>
                        <div class="informasi-content">
                            <h3>Sertifikasi Kompetensi Penting untuk Kamu</h3>
                            <div class="informasi-meta">
                                <i class="far fa-calendar-alt"></i>
                                <span>November 24, 2024</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const informasiItems = document.querySelectorAll('.informasi-item'); // Select all items

            function handleScroll() {
                informasiItems.forEach((item, index) => {
                    const itemRect = item.getBoundingClientRect(); // Get the item's bounding rect

                    // Check if the item is visible
                    if (itemRect.top >= 0 && itemRect.bottom <= window.innerHeight) {
                        // Add visible class with a staggered delay based on the index
                        setTimeout(() => {
                            item.classList.add('visible'); // Add visible class to trigger animation
                        }, index * 300); // Adjust the multiplier for speed (300ms per item)
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Call on initial load to check if the items are visible
        });
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
