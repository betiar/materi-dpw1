<?php

class Animal {
	public $momo, $doggo, $zya, $masha;
}

class Kucing extends Animal {
	function bersuara(){
		return "Meoooooong";
	}
}

class Anjing extends Animal {
	function bersuara(){
		return "gukgukguk";
	}
}


$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->tidak_terbang = "tidak bisa terbang";
echo "Momo Adalah Kucing <br>";
echo "jumlah kakinya adalah ".$momo->jumlah_kaki. "<br>";
echo $momo->tidak_terbang. "<br>";
echo "suaranya adalah".$momo->bersuara(). "<br>";



 ?>