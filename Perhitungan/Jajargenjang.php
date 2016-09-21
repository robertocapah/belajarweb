<?php
 include_once "AritmatikaDasar.php";
 class Jajargenjang extends AritmatikaDasar{
 	public function Luas($panjang,$lebar)
 	{
 		$this->panjang=$panjang;
 		$this->lebar=$lebar;
 		$aritmatika= new AritmatikaDasar();
 		$luas=$aritmatika->kali($this->panjang,$this->lebar);
 		return $luas;
 	}
 	public function Keliling($panjang,$lebar)
 	{
 		$this->panjang=$panjang;
 		$this->lebar=$lebar;
 		$aritmatika=new AritmatikaDasar();
 		$keliling=$aritmatika->kali($aritmatika->tambah($this->panjang,$this->lebar),2);
 		return $keliling;
 	}
 }