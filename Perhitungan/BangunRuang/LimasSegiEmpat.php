<?php
/*Volume (V) = 1/4 x Luas Alas x Tinggi
Luas (L) = Jumlah dari luas masing-masing sisinya (Luas alas + 4 X Luas sisi)*/
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class LimasSegiEmpat extends Persegi{
		public function Luas($sisiA, $sisiB)
		{
			$this->s=$sisiA;
			$this->b=$sisiB;
			$l=new Persegi();
			$s=new Segitiga();
			$luasAlas=$l->Luas($this->s);
			$luasSisi=$s->Luas($this->s,$this->b);
			$luas=$l->Tambah($luasAlas,$l->Kali(4,$luasSisi));
			return $luas;
		}
		public function Volume($sisiA,$tinggi)
		{
			$this->a=$sisiA;
			$this->b=$tinggi;
			$l= new Persegi();
			$la=$l->Luas($this->a);
			$luas=$l->Kali($l->Bagi(1,4),$l->Kali($la,$this->b));
			return $luas;
		}
	}