<?php
include_once "AritmatikaDasar.php";
class Lingkaran extends AritmatikaDasar{
	public function Luas($jari)
	{
		$this->j=$jari;
		$aritmatika=new AritmatikaDasar();
		$luas=$aritmatika->kali(3.14,$aritmatika->kali($this->j,$this->j));
		return $luas;
	}
	public function Keliling($jari)
	{
		$this->jari=$jari;
		$aritmatika=new AritmatikaDasar();
		$keliling=$aritmatika->kali(2,$aritmatika->kali(3.14,$this->jari));
		return $jari;
	}
}