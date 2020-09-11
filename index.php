<?php

class Animal {
	public $momo, $doggo, $pins, $dori;
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
class burung extends Animal {
	function bersuara(){
		return "cipcipcip";
	}
}

class reptil extends Animal {
	function bersuara(){
		return "hemmmmmmm";
	}
}


$momo = new Kucing;
$momo->jumlah_kaki = 4;
$momo->tidak_terbang = "tidak bisa terbang";
echo "Momo Adalah Kucing <br>";
echo "jumlah kakinya adalah ".$momo->jumlah_kaki. "<br>";
echo $momo->tidak_terbang. "<br>";
echo "suaranya adalah".$momo->bersuara(). "<br>";
 
 echo"<hr>";

$doggo =new Anjing;
$doggo->jumlah_kaki = 4;
$doggo->tidak_terbang = "tidak bisa terbang";
echo "doggo Adalah Anjing <br>";
echo "jumlah kakinya adalah ".$doggo->jumlah_kaki. "<br>";
echo $doggo->tidak_terbang. "<br>";
echo "suaranya adalah".$doggo->bersuara(). "<br>";

echo"<hr>";

$pins =new burung;
$pins->jumlah_kaki = 2;
$pins->terbang = "bisa terbang";
echo "pins Adalah burung <br>";
echo "jumlah kakinya adalah ".$pins->jumlah_kaki. "<br>";
echo $pins->terbang. "<br>";
echo "suaranya adalah".$pins->bersuara(). "<br>";

echo"<hr>";

$dori =new reptil;
$dori->jumlah_kaki = 4;
$dori->tidak_terbang = "tidak bisa terbang";
echo "dori Adalah reptil <br>";
echo "jumlah kakinya adalah ".$dori->jumlah_kaki. "<br>";
echo $dori->tidak_terbang. "<br>";
echo "suaranya adalah".$dori->bersuara(). "<br>";

 ?>