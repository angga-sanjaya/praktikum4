<?php
# Latihan3

class Mahasiswa
{
    public $nama;
    public $prodi;

    // Constructor menerima parameter
    public function __construct($nama, $prodi)
    {
        $this->nama  = $nama;
        $this->prodi = $prodi;
    }

    public function TampilkanData()
    {
        echo "Nama: "  . $this->nama  . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
    }
}

// Membantu menginisialisasi dua object dengan data yang berbeda
$mhs1 = new Mahasiswa("Andi","Sistem Informasi");
$mhs2 = new Mahasiswa("Budi", "Teknik Informatika");

// Menampilkan data masing-masing object
$mhs1->TampilkanData();

echo "<hr>";

$mhs2->TampilkanData();


/*

Perhatikan prosesnya
Object pertama:
$mhs1 = new Mahasiswa(
"Andi",
"Sistem Informasi"
);
mengirimkan:
" Andi "
" Sistem Informasi "
ke constructor.
Sedangkan object kedua:
$mhs2 = new Mahasiswa(
"Budi",
"Teknik Informatika"
);
mengirimkan data yang berbeda.
Namun keduanya tetap menggunakan:
class Mahasiswa

*/

?>

