<?php
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class Tabung extends Lingkaran{
		public function Luas($jari,$t)// 2πr(r+t)
		{
			$this->j=$jari;
			$this->t=$t;
			$l= new Lingkaran();
			$a=$l->Kali(2,$l->Kali(3.14,$this->j));
			$b=$l->Tambah($this->j,$this->t);
			$luas=$l->Kali($a,$b);
			return $luas;
		}
		public function Volume($jari,$t)
		{
			$this->j=$jari;
			$this->t=$t;
			$l=new Lingkaran();
			$volume=$l->Kali($l->Luas($this->j),$this->t);
			return $volume;
		}
	}