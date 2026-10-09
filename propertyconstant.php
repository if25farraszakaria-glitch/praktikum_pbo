<?php

class produk {

//property

public string $kode; //primary key auto icerment
public string $nama;
public int $harga;
public int $stok;

//constant
public const PAJAK = 0.11;


}

//object 
$produk = new produk();

$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = 5;
$pajak        = Produk :: PAJAK * 100;
$jumlah_pajak = $produk->harga *
produk ::PAJAK;
$total       = $produk->harga + 
$jumlah_pajak;

echo "produk : " . $produk->nama;
echo "<br>harga  : " . $produk->harga;
echo "<br>Stok   : " . $produk->stok;
echo "<br>Pajak  : " . $pajak;
echo "total harga setelah pajak adalah " . $total;