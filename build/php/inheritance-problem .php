<?php

class produk {
    public  $judul ,
            $penulis,
            $penerbit, 
            $harga, 
            $jml_halaman,
            $waktu_Main,
            $tipe;

    public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0 , $jml_halaman = 0, $waktu_Main = 0 , $tipe){
        $this->judul = $judul; //this untuk mengambil nilai dari judul di fungsi sehingga program tau kita tidak membuat varaiabel lagi 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jml_halaman = $jml_halaman; 
        $this->waktu_Main = $waktu_Main;
        $this->tipe = $tipe;
    }
    
    public function getLabel(){
        return "$this->penulis,$this->penerbit";

    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} :  {$this->judul} | {$this->getLabel()} (RP.{$this->harga })" ;

        if($this->tipe == "komik" ){
            $str .=  " - {$this->jml_halaman}  halaman";
        }else if ($this->tipe == "game"){
            $str .= " ~ {$this->waktu_Main} waktu main";
        }
        return $str;
    }
}


class CetakInfoProduk { //cetakinfoproduk adalah tipe data yg menyimpan data dan fungsi data dalam satu unit 
    public function cetak( produk $produk){ //kita bisa membuat objek ($produk) dari type data itu sendiri (produk)
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("naruto", "masashi kisimoto" ,"shonen" ,3000, 100 , 0,"komik" );
$produk2 = new produk("uncharted", "neil druckman", "sony computer" , 20000, 0 , 50, "game");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

