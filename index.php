<?php require_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrintKuy . Jasa Cetak Dokumen Online</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo-brand">
                <img src="Print Kuy Circular Printer Badge (2).png" alt="Logo PrintKuy">
                <span>PrintKuy<span class="logo-dot">.</span></span>
            </a>
            <ul class="nav-menu">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="#cara-pesan">Cara Pesan</a></li>
                <li><a href="pemesanan.php" class="btn-nav-primary">Mulai Pesan &rarr;</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="hero-grid">
            <div class="hero-text">
                <div class="badge-tag">LAYANAN PRINT ONLINE</div>
                <h1>Cetak Dokumen Lebih <span class="highlight">Mudah & Praktis.</span></h1>
                <p>Pesan layanan cetak dokumen dengan lebih praktis. Pilih layanan yang tersedia, isi data pemesanan, lalu unggah dokumen melalui website.</p>
                <div class="hero-buttons">
                    <a href="pemesanan.php" class="btn-navy">Pesan Sekarang &rarr;</a>
                    <a href="#layanan" class="btn-outline">Lihat Layanan</a>
                </div>
            </div>

            <!-- Visual Mockup Card -->
            <div class="hero-mockup">
                <div class="mockup-window">
                    <div class="mockup-header">
                        <span class="dot dot-navy1"></span>
                        <span class="dot dot-navy2"></span>
                        <span class="dot dot-navy3"></span>
                        <span style="font-size: 0.75rem; color: #64748b; margin-left: 8px; font-weight: 600;">PrintKuy Workspace</span>
                    </div>
                    <div class="mockup-body">
                        <div style="font-size: 1.5rem; margin-bottom: 0.5rem;">📄</div>
                        <h4 style="color: #0f172a; margin-bottom: 0.25rem;">Dokumen Siap Dicetak</h4>
                        <p style="font-size: 0.8rem; color: #64748b;">Proses pemesanan dimulai secara online.</p>
                    </div>
                </div>
                <div class="floating-badge">
                    <div style="background: #0f172a; color: #fdfbf7; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 0.8rem;">✓</div>
                    <div>
                        <div style="font-size: 0.8rem; font-weight: 700; color: #0f172a;">Pemesanan lebih praktis</div>
                        <div style="font-size: 0.7rem; color: #64748b;">Mulai dari website PrintKuy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Layanan -->
    <section class="section" id="layanan">
        <div class="section-header">
            <div class="badge-tag">LAYANAN KAMI</div>
            <h2>Pilih Layanan Cetak</h2>
            <p>Temukan layanan yang sesuai dengan kebutuhan dokumen dan tugasmu.</p>
        </div>

        <div class="layanan-grid">
            <div class="card-layanan">
                <div class="icon-box">🖨️</div>
                <h3>Print Hitam Putih</h3>
                <p>Cetak dokumen hitam putih dengan hasil jelas.</p>
                <div class="price-tag">Rp500 <span>/ halaman</span></div>
                <a href="pemesanan.php?layanan=Print Hitam Putih" class="btn-navy" style="justify-content: center;">Pesan Layanan &rarr;</a>
            </div>

            <div class="card-layanan">
                <div class="icon-box">🖼️</div>
                <h3>Print Berwarna</h3>
                <p>Cetak dokumen berwarna untuk tugas dan pekerjaan.</p>
                <div class="price-tag">Rp1.500 <span>/ halaman</span></div>
                <a href="pemesanan.php?layanan=Print Berwarna" class="btn-navy" style="justify-content: center;">Pesan Layanan &rarr;</a>
            </div>
        </div>
    </section>

    <!-- Section Cara Pemesanan -->
    <section class="section" id="cara-pesan">
        <div class="section-header">
            <div class="badge-tag">CARA PEMESANAN</div>
            <h2>Tiga Langkah Mudah</h2>
            <p>Ikuti langkah berikut untuk memulai pemesanan layanan cetak di PrintKuy.</p>
        </div>

        <div class="steps-grid">
            <div class="card-step">
                <div class="step-badge">01</div>
                <h3>Pilih Layanan</h3>
                <p>Periksa daftar layanan dan pilih jenis cetak yang sesuai dengan kebutuhanmu.</p>
            </div>

            <div class="card-step">
                <div class="step-badge">02</div>
                <h3>Isi Data & Dokumen</h3>
                <p>Buka halaman pemesanan, lengkapi informasi yang diminta, dan unggah dokumen.</p>
            </div>

            <div class="card-step">
                <div class="step-badge">03</div>
                <h3>Kirim Pesanan</h3>
                <p>Kirim formulir pemesanan dan ikuti informasi selanjutnya sesuai proses yang tersedia.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> PrintKuy. All Rights Reserved.</p>
    </footer>

</body>
</html>