<?php
	/*spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});*/
	class Bola extends Lingkaran{
		public function Luas($jari)
		{
			$this->j=$jari;
			//$l= new Lingkaran();
			$luas=$this->Kali(4,$l->Luas($this->j));
			return $luas;
		}
		public function Volume($jari)
		{
			$this->j=$jari;
			//$l=new Lingkaran();
			$v1=$this->Bagi(4,3);
			$v2=$this->Kali($l->Luas($this->j),$this->j);
			$luas=$this->Kali($v1,$v2);
			return $luas;
		}
	}