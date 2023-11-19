<?php

namespace Traits;

trait ResponseFormatter
{
    public function format($code, $message, $status,$data = null){
        return json_encode([
            "code" => $code,
            "message" => $message,
            "status" =>$status,
            "data" =>  $data
        ]);
    }
}