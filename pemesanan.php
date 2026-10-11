<?php 
require_once 'koneksi.php'; 
$selected_layanan = isset($_GET['layanan']) ? $_GET['layanan'] : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan - PrintKuy</title>
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
                <li><a href="index.php">&larr; Kembali ke Beranda</a></li>
            </ul>
        </div>
    </nav>

    <!-- Form Section -->
    <section class="section" style="padding-top: 140px;">
        <div class="form-container">
            <div style="margin-bottom: 2rem; text-align: center;">
                <h2 style="font-size: 1.8rem; color: #0f172a; font-weight: 800;">Formulir Pemesanan Cetak</h2>
                <p style="color: #64748b; font-size: 0.95rem; margin-top: 0.25rem;">Lengkapi data di bawah ini untuk memproses dokumen Anda.</p>
            </div>

            <form action="pesan.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" placeholder="Contoh: Budi Santoso" required>
                    </div>

                    <div class="form-group">
                        <label for="whatsapp">No. WhatsApp</label>
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="Contoh: 081234567890" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_layanan">Jenis Layanan</label>
                        <select id="jenis_layanan" name="jenis_layanan" required>
                            <option value="Print Hitam Putih" <?php echo ($selected_layanan == 'Print Hitam Putih') ? 'selected' : ''; ?>>Print Hitam Putih</option>
                            <option value="Print Berwarna" <?php echo ($selected_layanan == 'Print Berwarna') ? 'selected' : ''; ?>>Print Berwarna</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kertas">Jenis Kertas</label>
                        <select id="jenis_kertas" name="jenis_kertas" required>
                            <option value="A4 70gsm">A4 (70 gsm)</option>
                            <option value="A4 80gsm">A4 (80 gsm)</option>
                            <option value="F4 / Folio">F4 / Folio (70 gsm)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <input type="number" id="jumlah_halaman" name="jumlah_halaman" min="1" value="1" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_rangkap">Jumlah Rangkap</label>
                        <input type="number" id="jumlah_rangkap" name="jumlah_rangkap" min="1" value="1" required>
                    </div>

                    <div class="form-group">
                        <label for="opsi_warna">Opsi Warna</label>
                        <select id="opsi_warna" name="opsi_warna" required>
                            <option value="Hitam Putih">Hitam Putih</option>
                            <option value="Full Color">Full Color</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="opsi_jilid">Finishing / Jilid</label>
                        <select id="opsi_jilid" name="opsi_jilid" required>
                            <option value="Tanpa Jilid">Tanpa Jilid</option>
                            <option value="Jilid Lakban">Jilid Lakban</option>
                            <option value="Jilid Spiral">Jilid Spiral</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label for="metode_pengambilan">Metode Pengambilan</label>
                        <select id="metode_pengambilan" name="metode_pengambilan" required>
                            <option value="Ambil Mandiri">Ambil Mandiri di Toko</option>
                            <option value="Kirim Kurir Instant">Kirim via Kurir Instant (Gojek/Grab)</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label for="file_dokumen">Upload Berkas Dokumen (PDF, DOCX, JPG - Maks 20MB)</label>
                        <input type="file" id="file_dokumen" name="file_dokumen" accept=".pdf,.doc,.docx,.jpg,.png" required>
                    </div>

                    <div class="form-group full">
                        <label for="catatan">Catatan Tambahan (Opsional)</label>
                        <textarea id="catatan" name="catatan" rows="3" placeholder="Contoh: Print halaman 1-5 saja..."></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-submit-form" style="margin-top: 1.5rem;">Kirim Pesanan Via WhatsApp &rarr;</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> PrintKuy. All Rights Reserved.</p>
    </footer>

</body>
</html>