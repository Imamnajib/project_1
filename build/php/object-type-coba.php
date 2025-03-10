<?php
class ProdukElektronik {
    public $namaProduk;
    public $merkProduk;
    public $garansi;
    public $tahun;

    public function __construct($namaProduk = "Produk Default", $merkProduk = "Merk Default", $garansi = "1", $tahun = "2025") {
        $this->namaProduk = $namaProduk;
        $this->merkProduk = $merkProduk;
        $this->garansi = $garansi;
        $this->tahun = $tahun;
    }

    public function getInfoLengkap() {
        return " {$this->merkProduk}, {$this->garansi}";
    }
}

class CetakProdukElektronik{
    public function cetak( ProdukElektronik $Elektronik){
        $str = "{$Elektronik->namaProduk} | {$Elektronik->getInfoLengkap()} , {$Elektronik->tahun}";
        return  $str;
    }
}

$produk1 = new ProdukElektronik("laptop", "Samsung", "1 Tahun", "2025"); 
$produk2 = new ProdukElektronik("HP", "Vivo", "2 Tahun", "2026");

echo "komik : ".$produk1->getInfoLengkap();
echo "<br>";
echo "game :" .$produk2->getInfoLengkap(); 
echo "<br>";

$InfoProduk = new CetakProdukElektronik;
echo $InfoProduk->cetak($produk1);
