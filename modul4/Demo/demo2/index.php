<?php

include "Controller/JenisOperasi.php";

use Controller\Operasi;

$jenisOperasi = new Operasi;

echo $jenisOperasi->getAllOperasi();