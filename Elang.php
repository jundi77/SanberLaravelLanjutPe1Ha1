<?php

class Elang extends Harimau
{
	use Fight;
	private function __construct()
	{
		$this->jumlahKaki = 2;
		$this->keahlian = "terbang tinggi";
		$this->attackPower = 10;
		$this->defencePower = 5;
	}

	public function getInfoHewan()
	{
		echo var_dump($this) . '\n';
		echo 'Hewan ini berjenis ' . $this->class . '.';
	}
}