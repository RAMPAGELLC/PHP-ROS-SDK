<?php
// Copyright (©) 2023 RAMPAGE Interactive
// RAMPAGE Online Services (ROS) API SDK for Nebula Labs Portal (nebula.rampage.place).

namespace RAMPAGELLC\Nebula;
use \Exception;

class OnlineServices {
    public $base = "https://api.ros.rampage.host/v1";
    
    public static function fetch(string $url, array $options) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $options["method"]);
        
        if (isset($options["body"])) curl_setopt($ch, CURLOPT_POSTFIELDS, $options["body"]);
        if (isset($options["headers"])) {
            $headers = [];
            
            foreach ($options["headers"] as $key => $value) {
                $headers[] = "{$key}: {$value}";
            }

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch);
        
        if (curl_errno($ch)) throw new Exception('Curl error: ' . curl_error($ch));

        curl_close($ch);
        return $response;
    }
}