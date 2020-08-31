<?php
class produk{
public $nama,
	   $merk, 
	   $harga;

public function getCetak(){
	return "$this->nama, $this->merk, $this->harga";
}
public function __construct($nama="nama",$merk="merk",$harga=0){
	$this->nama = $nama;
	$this->merk =$merk;
	$this->harga =$harga;
 		}
}
$produk1 = new produk("Kursi","Lemari",1200000);
$produk2 = new produk("Tempat Tidur","Mesin Cuci",4000000);
$produk3 = new produk("Blender","Mixer",250000);
$produk4 = new produk("Kulkas","Meja Makan",3800000);

echo "Nama Barang : " .$produk1->getCetak();
echo "<br>";
echo "Nama Barang : " .$produk2->getCetak();
echo "<br>";
echo "Nama Barang : " .$produk3->getCetak();
echo "<br>";
echo "Nama Barang : " .$produk4->getCetak();
?>