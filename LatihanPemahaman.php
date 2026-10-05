<?php
# Bagian 9. LATIHAN PEMAHAMAN

class Buku {

    public $judul;
    public $penulis;

    // Constructor dengan 2 parameter untuk menginisialisasi property
    public function __construct ($judul, $penulis) {
        $this -> judul      = $judul  ;
        $this -> penulis    = $penulis;
    }
    
    // Method untuk menampilkan data buku
    public function TampilkanData() {
        echo "Judul  : " . $this -> judul   . "<br>";
        echo "Penulis: " . $this -> penulis         ;
    }
}

// Instansiasi object $buku1 dengan mengirimkan argumen judul dan penulis
$buku1 = new Buku(
    "Pemrograman PHP",
    "Ahmad"
);

// Memanggil method tampilkanData()
$buku1 -> TampilkanData();

?>