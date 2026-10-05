# LAPORAN TUGAS MATA KULIAH PEMROGRAMAN WEB 2
## Pertemuan 4 – Constructor dan $this pada PHP (PBO)

---

### 👤 IDENTITAS MAHASISWA
* **Nama** : Angga Sanjaya
* **NIM** : 202457201012
* **Kelas / Semester** : Semester V
* **Program Studi** : Sistem Informasi
* **Perguruan Tinggi** : Institut Teknologi Mojosari (ITM) Nganjuk
* **Dosen Pengampu** : Nafis Sururi, M. Kom.

---

### 📥 UNDUH DOKUMEN MODUL ACUAN
> **Link Download Modul Praktikum:**  
> [Download MODUL 4 PRAKTIKUM PWEB2_CONSTRUCTOR.docx](URL_MODUL_SAYA_DI_SINI)  
*(Silakan ganti `URL_MODUL_SAYA_DI_SINI` dengan link Google Drive / lokasi file Anda)*

---

### 🗺️ PETA / ROADMAP STRUKTUR FOLDER
Berikut adalah susunan direktori file proyek pada folder `praktikum4`:

```text
htdocs/
└── pemweb2/
    └── praktikum4/
        ├── latihan1.php
        ├── latihan2.php
        ├── latihan3.php
        ├── latihan4.php
        ├── LatihanPemahaman.php
        └── pbl_produk.php

📂 DESKRIPSI FILE KODE PROGRAM & PEMETAAN MODULNama File PHPBagian ModulDeskripsi Fungsi & Logika Kodelatihan1.php8.1 Praktikum 1Membuktikan bahwa method __construct() secara otomatis langsung dieksekusi oleh PHP pada saat objek pertama kali dibuat (instansiasi).latihan2.php8.2 Praktikum 2Menunjukkan cara menggunakan constructor untuk langsung mengisi nilai properti milik objek secara internal saat pembuatan objek.latihan3.php8.3 Praktikum 3Mengimplementasikan parameter pada constructor agar pengisian nilai properti dapat dilakukan secara dinamis untuk setiap objek yang berbeda.latihan4.php8.4 Praktikum 4Menerapkan constructor dengan banyak parameter (NIM, Nama, Prodi, Semester) untuk menginisialisasi seluruh properti kelas secara fleksibel.LatihanPemahaman.php9. Latihan PemahamanPenyelesaian kode rumpang pada Class Buku untuk menghubungkan parameter constructor dengan properti $judul dan $penulis.pbl_produk.php10, 11, & 12. PBL ProdukImplementasi studi kasus Problem Based Learning (Sistem Data Produk) menggunakan constructor 4 parameter serta penambahan method hitungNilaiStok().💡 PEMBAHASAN MATERI & PERBANDINGAN LOGIKA PROGRAMA. Pokok Bahasan Utama Modul 4 & Peran Sintaks/OperatorModul 4 berfokus pada efisiensi inisialisasi objek dan pengelolaan konteks objek dalam Pemrograman Berorientasi Objek (PBO) berbasis PHP. Terdapat tiga komponen utama yang dipakai:Method Spesial Constructor (public function __construct(...))Role/Fungsi: Bertindak sebagai magic method yang otomatis dipanggil oleh PHP saat perintah new NamaClass(...) dieksekusi.Tujuan: Menerima argumen dari luar dan langsung menginisialisasi properti objek pada saat objek dilahirkan.Kata Kunci $thisRole/Fungsi: Bertindak sebagai pseudo-variable yang merujuk pada objek yang sedang aktif/menjalankan method tersebut.Tujuan: Membedakan antara variabel parameter lokal milik method dengan properti asli milik kelas (contoh: $this->nama = $nama;).Operator Access Object (->)Role/Fungsi: Digunakan untuk mengakses properti atau memanggil method dari suatu objek.B. Perbandingan Konkret: Sebelum vs Sesudah Menggunakan Constructor1. Sebelum Menggunakan Constructor (Modul 2 & 3)Objek diciptakan dalam kondisi "kosong" terlebih dahulu, baru kemudian propertinya diisi satu per satu dari luar kelas:PHP// Pembuatan objek kosong
$mhs1 = new Mahasiswa(); 

// Pengisian properti dilakukan satu per satu (manual)
$mhs1->nim = "2301001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 3;
Kelemahan: Membutuhkan banyak baris kode (code redundancy), serta berisiko ada properti yang lupa diisi sehingga data objek menjadi tidak konsisten.2. Sesudah Menggunakan Constructor (Modul 4)Proses instansiasi objek (new) dan pengisian nilai properti dilakukan dalam satu langkah tunggal yang atomik:PHPclass Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    // Inisialisasi properti dikelompokkan di dalam constructor
    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
}

// Pengisian data langsung saat instansiasi objek
$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 3);
Kelebihan: Kode menjadi jauh lebih ringkas, rapi, serta menjamin seluruh properti wajib terisi sejak awal objek dibuat.3. Penerapan pada Kode Program (pbl_produk.php)Pada studi kasus Sistem Data Produk (pbl_produk.php), pengisian nilai kode, nama, harga, dan stok dikirimkan secara langsung saat objek dibuat:PHP$produk1 = new Produk("P001", "Laptop", 7000000, 10);
Properti yang terisi otomatis tersebut kemudian diolah oleh method pengembangan hitungNilaiStok():PHPpublic function hitungNilaiStok() {
    return $this->harga * $this->stok;
}
C. Kesimpulan PembahasanOtomatisasi Inisialisasi: __construct() memangkas baris kode pembuatan objek sehingga program lebih bersih dan efisien.Isolasi Konteks Data: Penggunaan $this memastikan setiap objek mengelola nilainya masing-masing secara independen.Kepastian Data: Penggunaan parameter pada constructor mencegah terciptanya objek tanpa data pendukung yang lengkap.