<?php

namespace Controller;

include "Traits/ResponseFormater.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class Operasi extends Controller{
    use ResponseFormatter;
    public function __construct()
    {
        $this -> controlOperasi = "Semua Jenis Operasi";
       $this -> controlMethod = "Get Operasi";
    }
    
    public function getAllOperasi()
    {
        $dummyData = [
            "Operasi Jantung",
            "Operasi Paru-Paru",
            "Operasi Otak",
            "Upgrade Paru-Paru",
            "Upgrade Otak",
            "Upgrade Jantung"
        ];
        
        $respon = [
            "atribute" => $this -> getControllerAttribute(),
            "Jenis Operasi" => $dummyData
        ];
        
        return $this -> format ("120", "Operasi", "succes", $respon);
        
    }
}