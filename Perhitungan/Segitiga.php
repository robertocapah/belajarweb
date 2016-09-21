<?php
include_once "AritmatikaDasar.php";
class Segitiga extends AritmatikaDasar{
	public function Luas($alas,$tinggi)
	{
		$this->alas=$alas;
		$this->tinggi=$tinggi;
		$aritmatika= new AritmatikaDasar();
		$luasSegitiga=$aritmatika->kali($this->alas,$this->tinggi)/2;
		return $luasSegitiga;
	}
	public function Keliling($a,$b,$c)
	{
		$this->a=$a;
		$this->b=$b;
		$this->c=$c;
		$aritmatika= new AritmatikaDasar();
		$KelilingSegitiga=$aritmatika->tambah($aritmatika->tambah($this->a,$this->b),$this->c);
		return $KelilingSegitiga;
	}
}