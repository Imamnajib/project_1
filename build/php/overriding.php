<?php

class produk { //parent
    public  $judul , // public itu visibility 
            $penulis,
            $penerbit, 
            $harga;

    public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", 
                                    $harga = 0){
        $this->judul =  $judul; //this untuk mengambil nilai dari judul di fungsi sehingga program tau kita tidak membuat varaiabel lagi 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel(){
        return "$this->penulis,$this->penerbit";

    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (RP.{$this->harga })" ;
        return $str ;
    }
}

 //INI KOMIKKKKK
class komik extends produk{ //child 
    public $jml_halaman;

    public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0 , $jml_halaman = 0){

    parent::__construct($judul ,$penulis , $penerbit , $harga);

    $this->jml_halaman;
        
    }

    public function getInfoProduk(){
        $str = "komik : ".parent::getInfoProduk() ." - {$this->jml_halaman} halaman." ;
        return $str;
    }
}

// INI GAMEEE
class game extends produk { //child
    public $waktu_Main;
    public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $waktu_Main = 0 ) {

    parent::__construct($judul ,$penulis , $penerbit,   $harga, $waktu_Main);    

    $this->waktu_Main;

    }
    public function getInfoProduk() {
        $str = "game :  ".parent::getInfoProduk() ." ~ {$this->waktu_Main} jam." ;
        return $str;
    }
}


class CetakInfoProduk { //cetakinfoproduk adalah tipe data yg menyimpan data dan fungsi data dalam satu unit 
    public function cetak( produk $produk){ //kita bisa membuat objek ($produk) dari type data itu sendiri (produk)
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("naruto", "masashi kisimoto" ,"shonen" ,3000, 100 ); // new = object 
$produk2 = new game("uncharted", "neil druckman", "sony computer" , 20000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();