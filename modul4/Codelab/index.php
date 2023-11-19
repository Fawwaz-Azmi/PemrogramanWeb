<?php

include "Controller/ProductController.php";

use Controller\JurusanUMM;
use Controller\ProductController;

$Jurusan = new JurusanUMM;

echo $Jurusan->getAllProduct();