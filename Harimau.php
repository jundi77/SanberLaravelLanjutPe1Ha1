<?php
require_once 'Fight.php';

class Harimau
{
	use Fight;
	public function __construct()
	{
		$this->jumlahKaki = 4;
		$this->keahlian = "lari cepat";
		$this->attackPower = 7;
		$this->defencePower = 8;
	}

	public function getInfoHewan()
	{
		echo var_dump($this) . "\n<br/>";
		echo 'Hewan ini berjenis ' . self::class . '.';
	}
}