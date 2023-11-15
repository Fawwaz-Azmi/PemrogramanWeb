<?php

namespace Controller;

// Include statements
include "Traits/ResponFormatter.php";
include "Controller/Controller.php";

// Use statement with the correct namespace
use Traits\ResponseFormatter;

// Simulated product controller class
class JurusanUMM extends Controller {
    // Use the ResponseFormatter trait
    use ResponseFormatter;

    // Magic Method, called when an object is created
    public function __construct() {
        // Set controllerName attribute in the parent class controller
        $this->controllerName = "Get All Product";
        // Set controllerMethod attribute in the parent class controller
        $this->controllerMethod = "GET";
    }

    // Simulated method to get product data
    public function getAllProduct() {
        // Dummy data array
        $dummyData = [
            "Informatika",
            "Mesin",
            "Sipil",
            "Psikolog"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(), // Call getControllerAttribute method from the parent class
            "product" => $dummyData
        ];

        // Use the method from the trait
        return $this->responseFormatter(200, "Success", $response);
    }
}
