<?php

require_once 'Elang.php';
require_once 'Harimau.php';

$elang = new Elang();
$harimau = new Harimau();

echo $elang->getInfoHewan();
echo $harimau->getInfoHewan();