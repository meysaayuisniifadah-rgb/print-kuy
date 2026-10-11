<?php
require_once 'koneksi.php';

// Masukkan nomor WhatsApp admin toko di sini
$nomor_admin = "6281234567890"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data dari form
    $nama               = $conn->real_escape_string($_POST['nama']);
    $whatsapp           = $conn->real_escape_string($_POST['whatsapp']);
    $jenis_layanan      = $conn->real_escape_string($_POST['jenis_layanan']);
    $jenis_kertas       = $conn->real_escape_string($_POST['jenis_kertas']);
    $jumlah_halaman     = intval($_POST['jumlah_halaman']);
    $jumlah_rangkap     = intval($_POST['jumlah_rangkap']);
    $opsi_warna         = $conn->real_escape_string($_POST['opsi_warna']);
    $opsi_jilid         = $conn->real_escape_string($_POST['opsi_jilid']);
    $metode_pengambilan = $conn->real_escape_string($_POST['metode_pengambilan']);
    $catatan            = $conn->real_escape_string($_POST['catatan']);

    // Handling Upload File
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name     = time() . '_' . basename($_FILES["file_dokumen"]["name"]);
    $target_file   = $target_dir . $file_name;
    $fileType      = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi Ukuran File (Maksimal 20MB)
    if ($_FILES["file_dokumen"]["size"] > 20000000) {
        die("Error: Ukuran file terlalu besar (Maksimal 20MB). <a href='index.php'>Kembali</a>");
    }

    // Pindahkan File ke Folder uploads
    if (move_uploaded_file($_FILES["file_dokumen"]["tmp_name"], $target_file)) {
        
        // Simpan ke database
        $sql = "INSERT INTO pesanan (nama, whatsapp, jenis_layanan, jenis_kertas, jumlah_halaman, jumlah_rangkap, opsi_warna, opsi_jilid, metode_pengambilan, catatan, nama_file) 
                VALUES ('$nama', '$whatsapp', '$jenis_layanan', '$jenis_kertas', '$jumlah_halaman', '$jumlah_rangkap', '$opsi_warna', '$opsi_jilid', '$metode_pengambilan', '$catatan', '$file_name')";

        if ($conn->query($sql) === TRUE) {
            $pesanan_id = $conn->insert_id;

            // Buat Pesan WhatsApp Terstruktur
            $text_wa = "*PESANAN BARU - PRINT KUY (ID: #$pesanan_id)*\n\n";
            $text_wa .= "👤 *Nama:* " . $nama . "\n";
            $text_wa .= "📱 *No. WA:* " . $whatsapp . "\n";
            $text_wa .= "🖨️ *Layanan:* " . $jenis_layanan . "\n";
            $text_wa .= "📄 *Kertas:* " . $jenis_kertas . "\n";
            $text_wa .= "📑 *Jml Halaman:* " . $jumlah_halaman . " Halaman\n";
            $text_wa .= "🔄 *Jml Rangkap:* " . $jumlah_rangkap . " Set\n";
            $text_wa .= "🎨 *Warna:* " . $opsi_warna . "\n";
            $text_wa .= "📚 *Jilid:* " . $opsi_jilid . "\n";
            $text_wa .= "🚚 *Pengambilan:* " . $metode_pengambilan . "\n";
            $text_wa .= "📝 *Catatan:* " . ($catatan ? $catatan : '-') . "\n\n";
            $text_wa .= "📁 *File Terunggah:* " . $file_name . "\n\n";
            $text_wa .= "_Mohon info total biaya dan nomor rekening pembayarannya, terima kasih!_";

            // Redirect Otomatis ke WhatsApp
            $url_wa = "https://api.whatsapp.com/send?phone=" . $nomor_admin . "&text=" . urlencode($text_wa);
            header("Location: " . $url_wa);
            exit();

        } else {
            echo "Error DB: " . $sql . "<br>" . $conn->error;
        }

    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file Anda. <a href='index.php'>Kembali</a>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>