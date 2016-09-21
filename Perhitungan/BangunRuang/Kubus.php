<?php
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class Kubus extends Persegi{
	public function LuasP($sisi)
	{
		$this->s=$sisi;
		$a=new Persegi();
		$luasP=$a->kali(6,$a->Luas($this->s));
		return $luasP;
	}
	public function Volume($sisi)
	{
		$this->s=$sisi;
		$a=new Persegi();
		$volume=$a->kali($this->s,$a->luas($this->s));
		return $volume;
	}
	
}