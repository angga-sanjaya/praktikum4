# 📘 Laporan Tugas Pemrograman Web 2
### Pertemuan 4 – Constructor dan `$this` pada PHP (PBO)

---

## 👤 Identitas Mahasiswa

| | |
| :--- | :--- |
| **Nama** | Angga Sanjaya |
| **NIM** | 202457201012 |
| **Kelas / Semester** | Semester V |
| **Program Studi** | Sistem Informasi |
| **Perguruan Tinggi** | Institut Teknologi Mojosari (ITM) Nganjuk |
| **Dosen Pengampu** | Nafis Sururi, M. Kom. |

---

## 📥 Modul Acuan

> 📄 [Download MODUL 4 PRAKTIKUM PWEB2_CONSTRUCTOR.docx](https://bit.ly/3Vtr9AX)

---

## 🗺️ Struktur Folder

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
```

---

## 📂 Deskripsi File & Pemetaan Modul

| File | Bagian Modul | Deskripsi |
| :--- | :--- | :--- |
| `latihan1.php` | 8.1 Praktikum 1 | Membuktikan `__construct()` otomatis dieksekusi saat objek dibuat (*instansiasi*). |
| `latihan2.php` | 8.2 Praktikum 2 | Constructor untuk langsung mengisi nilai properti objek saat pembuatan. |
| `latihan3.php` | 8.3 Praktikum 3 | Parameter pada constructor agar nilai properti dinamis untuk tiap objek. |
| `latihan4.php` | 8.4 Praktikum 4 | Constructor dengan banyak parameter (NIM, Nama, Prodi, Semester). |
| `LatihanPemahaman.php` | 9. Latihan Pemahaman | Melengkapi kode rumpang Class `Buku` (`$judul` dan `$penulis`) lewat constructor. |
| `pbl_produk.php` | 10, 11 & 12. PBL Produk | Studi kasus *Problem Based Learning* (Data Produk): constructor 4 parameter + method `hitungNilaiStok()`. |

---

## 💡 Pembahasan Materi

### A. Pokok Bahasan & Peran Sintaks

Modul 4 berfokus pada **efisiensi inisialisasi objek** dan **pengelolaan konteks objek** dalam PBO PHP.

| Komponen | Fungsi | Tujuan |
| :--- | :--- | :--- |
| `__construct()` | *Magic method* yang otomatis dipanggil saat `new NamaClass(...)` dijalankan. | Menerima argumen dan langsung mengisi properti saat objek dibuat. |
| `$this` | *Pseudo-variable* yang merujuk ke objek yang sedang menjalankan method. | Membedakan parameter lokal dengan properti kelas (`$this->nama = $nama;`). |
| `->` | Operator akses objek. | Mengakses properti atau memanggil method dari objek. |

### B. Sebelum vs Sesudah Menggunakan Constructor

#### ❌ Sebelum (Modul 2 & 3)

Objek dibuat kosong, lalu properti diisi satu per satu dari luar kelas.

```php
$mhs1 = new Mahasiswa();
$mhs1->nim = "2301001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 3;
```

**Kelemahan:** kode berulang (*redundant*) dan ada risiko properti lupa diisi sehingga data tidak konsisten.

#### ✅ Sesudah (Modul 4)

Instansiasi (`new`) dan pengisian properti dilakukan dalam satu langkah.

```php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
}

$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 3);
```

**Kelebihan:** kode lebih ringkas, rapi, dan semua properti wajib terisi sejak objek dibuat.

#### 🛒 Penerapan pada `pbl_produk.php`

Nilai `kode`, `nama`, `harga`, dan `stok` dikirim langsung saat objek dibuat:

```php
$produk1 = new Produk("P001", "Laptop", 7000000, 10);
```

Properti tersebut diolah oleh method `hitungNilaiStok()`:

```php
public function hitungNilaiStok() {
    return $this->harga * $this->stok;
}
```

---

## ✅ Kesimpulan

1. **Otomatisasi inisialisasi** – `__construct()` memangkas baris kode sehingga program lebih bersih dan efisien.
2. **Isolasi konteks data** – `$this` memastikan tiap objek mengelola nilainya sendiri secara independen.
3. **Kepastian data** – parameter constructor mencegah objek terbentuk tanpa data yang lengkap.
