<?php

trait Hewan
{
	public $nama, $darah = 50, $jumlahKaki, $keahlian;
	
	public function atraksi()
	{
		echo $this->nama . " sedang " . $this->keahlian;
		return $this->nama . " sedang " . $this->keahlian;
	}
}