<?php
# Latihan2

class Mahasiswa{
    public $nama;
    public $prodi;

    // Constructor untuk mengisi property
    public function __construct()
    {
        $this->nama ="Andi";
        $this->prodi="Sistem Informasi";
    }

    public function TampilkanData()
    {
        echo "Nama: ".$this->nama."<br>";
        echo "Prodi: ".$this->prodi;
    }
}

// Menginstansiasi object Mahasiswa
$mhs1= new Mahasiswa();
$mhs1->TampilkanData();

/*

Analisis
Perhatikan bagian:

$this->nama = "Andi";
$this->prodi = "Sistem Informasi";

Property langsung mendapatkan nilai ketika object dibuat.
Pertanyaan
1.	Kapan $this->nama mendapatkan nilai?
2.	Apakah kita masih perlu menulis $mhs1->nama = "Andi"?
3.	Apa hubungan constructor dengan proses inisialisasi object?


*/
?>

