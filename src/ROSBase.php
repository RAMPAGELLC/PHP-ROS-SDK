<?php
// Copyright (©) 2023 RAMPAGE Interactive
// RAMPAGE Online Services (ROS) API SDK for Nebula Labs Portal (nebula.rampage.place).
// ROSBase is a Cloud-based Database for games.

namespace RAMPAGELLC\Nebula;
use \Exception;

class ROSBase extends OnlineServices {
    public function GetPermissions(string $bearerToken, string $key, string $environment, string|null $target) {
        if ($environment != "server" && $environment != "client") throw new Exception("Invalid environment type.");
        if ($environment == "client" && $target == null) throw new Exception("Invalid target type, must be STRING.");
        if ($environment == "server") $target = "";
        
        return $this->fetch($this->base . "/rosbase/read/$key/$environment/$target", [
            "method" => "POST",
            "headers" => [
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . $bearerToken,
            ],
        ]);
    }
    
    public function READ(string $bearerToken, string $key, string $environment, string|array $value, string|null $target)
    {
        return $this->fetch($this->base . "/rosbase/read/$key/$environment/$target", [
            "method" => "POST",
            "headers" => [
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . $bearerToken,
            ],
            "body" => json_encode([
                "value" => $value
            ]),
        ]);
    }
    
    public function WRITE(string $bearerToken, string $key, string $environment, string|array $value, string|null $target)
    {
        return $this->fetch($this->base . "/rosbase/write/$key/$environment/$target", [
            "method" => "POST",
            "headers" => [
                "Content-Type" => "application/json",
                "Authorization" => "Bearer " . $bearerToken,
            ],
            "body" => json_encode([
                "value" => $value
            ]),
        ]);
    }
}