<?php
// pbl_produk.php
# Bagian 10, 11, & 12: Problem Based Learning (PBL) - Sistem Data Produk

class Produk {
    # Bagian 10.1:
    // Tahap 1: Deklarasi Property
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    # Bagian 10.1: 
    // Tahap 2 & 3: Constructor dengan Parameter & Penggunaan $this
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    # Bagian 12: 
    // Method Pengembangan untuk menghitung total nilai stok (Harga x Stok)
    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    // Method pendukung untuk menampilkan data produk beserta total nilai stok
    public function tampilkanData() {
        echo "<b>Kode Produk</b> : " . $this->kode . "<br>";
        echo "<b>Nama Produk</b> : " . $this->nama . "<br>";
        echo "<b>Harga</b>       : Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "<b>Stok</b>        : " . $this->stok . " unit<br>";
        echo "<b>Nilai Stok</b>  : Rp" . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br>";
        echo "<hr>";
    }
}

// -----------------------------------------------------------------------------
# Bagian 10.1 
// Tahap 4 - IMPLEMENTASI & PENGUJIAN OBJEK
// -----------------------------------------------------------------------------

echo "<h2>System Data Produk - Implementasi PBL</h2>";

// Inisialisasi Objek Pertama melalui Constructor
$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    10
);

// Inisialisasi Objek Kedua melalui Constructor
$produk2 = new Produk(
    "P002",
    "Mouse",
    150000,
    25
);

// Menampilkan data masing-masing produk
$produk1->tampilkanData();
$produk2->tampilkanData();

?>