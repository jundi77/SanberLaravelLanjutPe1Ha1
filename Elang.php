<?php
require_once 'Fight.php';

class Elang
{
	use Fight;
	public function __construct($nama = self::class)
	{
		$this->nama = $nama;
		$this->jumlahKaki = 2;
		$this->keahlian = "terbang tinggi";
		$this->attackPower = 10;
		$this->defencePower = 5;
	}

	public function getInfoHewan()
	{
		echo 'Hewan ini berjenis ' . self::class . '.';
		echo var_dump($this) . "\n<br/>";
	}
}