<?php
# Latihan1

class mahasiswa{
    
    // Constructor sederhana
    public function __construct(){
        echo "Objek Mahasiswa Berhasil dibuat";
    }
}

// Menginstansiasi object Mahasiswa
$mhs1 = new Mahasiswa();

/*

Jalankan program melalui browser.
Perhatikan bahwa tulisan:
Constructor dijalankan
langsung muncul meskipun kita tidak menulis:

$mhs1->__construct();

Pertanyaan
1.	Kapan constructor dijalankan?
2.	Apakah constructor harus dipanggil secara manual?
3.	Apa yang terjadi jika object $mhs1 dibuat?

*/
?>

