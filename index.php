<?php

class mobil{
      public $merk, $tipe, $mesin, $max_speed;

     public  function cetaktipe(){
      	return $this->tipe;
      }

      function kecepatamaksimal(){
      	return "kecepatan maksimal dari mobil ini adalah".$this->max_speed;
      }
}


$bmw = new mobil;
$bmw->merk = "bmw";
$bmw->tipe = "320i";
$bmw->mesin = "250cc";
$bmw->max_speed = "250km/h";

echo "tipe".$bmw->kecepatamaksimal();