<?php
	include_once "AritmatikaDasar.php";
	class Trapesium extends AritmatikaDasar{
		public function luas($s,$t)
		{
			$this->s=$s;
			$this->t=$t;
			$aritmatika= new AritmatikaDasar();
			$luas=$aritmatika->kali(0.5,$aritmatika->kali($this->s,$this->t));
			return $luas;
		}
		public function Keliling($a,$b,$c,$d)
		{
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
			$this->d=$d;
			$aritmatika= new AritmatikaDasar();
			$keliling=$aritmatika->tambah($aritmatika->tambah($this->a,$this->b),$aritmatika->tambah($this->b,$this->c));
			return $keliling;
		}
	}