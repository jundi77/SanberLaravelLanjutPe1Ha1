<?php

trait Fight
{
	use Hewan;
	public $attackPower, $defencePower;

	public function serang($target)
	{
		try {
			echo $this->nama . " sedang menyerang " . $target->nama;
			$target->diserang($this);
		}
		catch(Exception $e) {
			echo "Obyek yang digunakan harus obyek yang menggunakan trait Fight.\n";
			return $e;
		}
		return $this;
	}

	private function diserang($penyerang)
	{
		try {
			echo $this->nama . " sedang diserang ";
			$this->darah = $this->darah - ($penyerang / $this->defencePower);
		}
		catch(Exception $e) {
			echo "Obyek yang digunakan harus obyek yang menggunakan trait Fight.\n";
			return $e;
		}
	}
}