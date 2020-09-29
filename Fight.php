<?php
require_once 'Hewan.php';

trait Fight
{
	use Hewan;
	public $attackPower, $defencePower;

	public function serang($target)
	{
		try {
			if (isset($target->nama)) {
				echo $this->nama . " sedang menyerang " . $target->nama . "\n<br/>";
				$target->diserang($this, 'not self');
			}
			else throw new Exception("Bukan obyek yang menggunakan trait Fight.", 1);
			
		}
		catch(Throwable $e) {
			echo "Obyek target disarankan adalah obyek yang menggunakan trait Fight.\n";
			return $e;
		}
		return $this;
	}

	public function diserang($penyerang, $callFunc = 'self')
	{
		try {
			if($callFunc == 'self') {
				$penyerang->serang($this);
			}
			else {
				echo $this->nama . " sedang diserang ";
				if($this->darah > 0)
					$this->darah = $this->darah - ($penyerang->attackPower / $this->defencePower);
			}
		}
		catch(Throwable $e) {
			echo "Obyek target disarankan adalah obyek yang menggunakan trait Fight.\n<br/>";
			return $e;
		}

		return $this;
	}
}