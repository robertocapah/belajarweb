<?php
	spl_autoload_register(function ($class_name) {
	    include "/../$class_name.php";
	});
	class PrismaSegitiga extends Segitiga{
		public function LuasP($alasA,$tinggiA,$tinggiP)
		{
			$this->a=$alasA;
			$this->t=$tinggiA;
			$this->p=$tinggiP;
			$l=new Segitiga();
			$luas=$l->kali(2,$l->Luas($this->a,$this->t));
			return $luas;
		}
		public function Volume($alasA,$tinggiA,$tinggiP)
		{
			$this->a=$alasA;
			$this->t=$tinggiA;
			$this->p=$tinggiP;
			$l=new Segitiga();
			$volume=$l->kali($this->p,$l->Luas($this->a,$this->t));
			return $volume;
		}
	}