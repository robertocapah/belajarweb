<?php
class AritmatikaDasar{
	public function tambah($x,$y){
		$this->x=$x;
		$this->y=$y;
		$hasil=$this->x+$this->y;
		return $hasil;
	}
	public function kurang($x,$y){
		$this->x=$x;
		$this->y=$y;
		$hasil=$this->x-$this->y;
		return $hasil;
	}
	public function kali($x,$y){
		$this->x=$x;
		$this->x=$y;
		$hasil=$this->x*$this->y;
		return $hasil;
	}
	public function bagi($x,$y){
		$hasil=$x/$y;
		return $hasil;
	}

}

?>