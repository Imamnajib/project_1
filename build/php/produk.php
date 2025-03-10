<?php

class Produk {
    public  $judul = "judul",
            $penulis= "penulis",
            $penerbit = "penerbit",
            $harga = "harga";
    
    public function getLabel(){
        return "$this->judul,$this->penulis; $this->penerbit";
    }
}


$produk1 = new Produk();
$produk1->judul ="naruto";
$produk1->penulis = "masashi kishimoto";
$produk1->penerbit = "shonen jump";
$produk1->harga = "30000";

$produk2 = new Produk();
$produk2->judul ="unchartedd";
$produk2->penulis = "neil druckman";
$produk2->penerbit = "sont computer";
$produk2->harga = "20000";

echo "komik : ".$produk1->getLabel();
echo "<br>";
echo "game :" .$produk2->getLabel(); 


