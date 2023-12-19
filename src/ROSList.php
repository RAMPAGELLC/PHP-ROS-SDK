<?php
// Copyright (©) 2023 RAMPAGE Interactive
// RAMPAGE Online Services (ROS) API SDK for Nebula Labs Portal (nebula.rampage.place).
// ROSList is a cloud-base server-list that can be public or for internalized usage. Such internal usage cases is remote-admin control of servers, etc.

namespace RAMPAGELLC\Nebula;
use \Exception;

class ROSList extends OnlineServices {
    public function PUT(string $ip, string|int $port, array $connected_uuids = [], bool $is_p2p = false, string $p2p_host_uuid = ""): bool
    {
        throw new Exception("API not live.");
        return false;
    }
    
    public function DELETE(string $server_uuid, string $bearerAuth): bool
    {
        throw new Exception("API not live.");
        return false;
    }

    public function GET(string $server_uuid): array
    {
        throw new Exception("API not live.");
        return [];
    }

    public function LIST(): array
    {
        throw new Exception("API not live.");
        return [];
    }
}