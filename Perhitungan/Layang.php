<?php
include_once "AritmatikaDasar.php";
class Layang extends AritmatikaDasar {
	public function Luas($d1,$d2)
	{
		$this->d1=$d1;
		$this->d2=$d2;
		$aritmatika= new AritmatikaDasar();
		$luas=$aritmatika->kali($aritmatika->kali($this->d1,$this->d2),0.5);
		return $luas;
	}
	public function Keliling($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
		$aritmatika=new AritmatikaDasar();
		$keliling=$aritmatika->kali(2,$aritmatika->tambah($this->a,$this->b));
		return $keliling;
	}
}