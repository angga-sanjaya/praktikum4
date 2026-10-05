<?php
# Latihan4

class Mahasiswa {

    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    // Constructor dengan 4 parameter
    public function __construct($nim, $nama, $prodi, $semester) {
        $this -> nim      = $nim;
        $this -> nama     = $nama;
        $this -> prodi    = $prodi;
        $this -> semester = $semester;
    }

    public function TampilkanData() {
        echo "NIM: "      . $this -> nim . "<br>";
        echo "Nama: "     . $this -> nama . "<br>";
        echo "Prodi: "    . $this -> prodi . "<br>";
        echo "Semester: " . $this -> semester . "<br>";
    }
}

$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 3);
$mhs1 -> TampilkanData();

/*

Memahami Alur Program
Mahasiswa perlu memahami alur berikut.
Ketika program menjalankan:

$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi",
    3
);

PHP membuat object berdasarkan class:

Mahasiswa

Kemudian PHP otomatis menjalankan:

__construct()
Nilai yang dikirim:
2301001
Andi
Sistem Informasi
3

diterima oleh parameter:

$nim
$nama
$prodi
$semester
Kemudian dimasukkan ke property:
$this->nim
$this->nama
$this->prodi
$this->semester

Sehingga object $mhs1 memiliki data:

NIM      : 2301001
Nama     : Andi
Prodi    : Sistem Informasi
Semester : 3

*/
?>