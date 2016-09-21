<?php
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class Bola extends Lingkaran{
		public function Luas($jari)
		{
			$this->j=$jari;
			$l= new Lingkaran();
			$luas=$l->Kali(4,$l->Luas($this->j));
			return $luas;
		}
		public function Volume($jari)
		{
			$this->j=$jari;
			$l=new Lingkaran();
			$v1=$l->Bagi(4,3);
			$v2=$l->Kali($l->Luas($this->j),$this->j);
			$luas=$l->Kali($v1,$v2);
			return $luas;
		}
	}