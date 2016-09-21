<?php
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class Kerucut extends Lingkaran{
		public function Luas($jari,$selimut)
		{
			$this->j=$jari;
			$this->s=$selimut;
			$l=new Lingkaran();
			$lin=$l->luas($jari);
			$s=$l->Kali(3.14,$l->Kali($this->j,$this->s));
			$luas=$l->Tambah($lin,$s);
			return $luas;
		}
		public function Volume($jari,$tinggi)
		{
			$this->j=$jari;
			$this->t=$tinggi;
			$l=new Lingkaran();
			$volume=$l->kali($l->Kali($l->Bagi(1,3),$l->Luas($jari)),$this->t);
			return $volume;
		}
	}