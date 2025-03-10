<?php

class Produk {
    public  $judul ,
            $penulis,
            $penerbit, 
            $harga ;

    public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul; //this untuk mengambil nilai dari judul di fungsi sehingga program tau kita tidak membuat varaiabel lagi 
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak ( Produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (RP.{$produk->harga})";
        return $str;
    }

}

$produk1 = new Produk("naruto", "masashi kisimoto" ,"shonen" ,"3000");
$produk2 = new produk("uncharted", "neil druckman", "sony computer" , "20000");


echo "komik : ".$produk1->getLabel();
echo "<br>";
echo "game :" .$produk2->getLabel(); 
echo "<br>";

$InfoProduk = new CetakInfoProduk ; 
echo $InfoProduk->cetak($produk2);

