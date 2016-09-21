<?php
include_once "AritmatikaDasar.php";
class Persegi extends AritmatikaDasar{
	  
	  public function Luas($sisi)
	  {
	  	 $this->sisi=$sisi;
      	 $aritmatika= new AritmatikaDasar();
	  	 $luas=$aritmatika->kali($this->sisi,$this->sisi);
      	 return $luas;
	  }
	  public function Keliling($sisi)
	  {
	  		$this->sisi=$sisi;
	  		$aritmatika= new AritmatikaDasar();
	  		$keliling=$aritmatika->kali($aritmatika->tambah($this->sisi,$this->sisi),2);
	  		return $keliling;
	  }
}