<?php

namespace Controller;

class Controller{
    var $controlOperasi;
    var $controlMethod;

    public function getControllerAttribute(){
        return [
            "Pengobatan" => $this -> controlOperasi,
            "Method" => $this -> controlMethod,
        ];
    }
}