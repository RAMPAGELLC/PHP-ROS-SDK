<?php
// Copyright (©) 2023 RAMPAGE Interactive
// RAMPAGE Online Services (ROS) API SDK for Nebula Labs Portal (nebula.rampage.place).
// ROSBase is a Cloud-based Database for games.

namespace RAMPAGELLC\Nebula;
use \Exception;

class ROSAuth extends OnlineServices {
    public function Redirect(int $ros_app_id, string $return_url)
    {
        $url = "https://api.ros.rampage.host/v1/authorize/client?appid=$ros_app_id&return=$return_url";
        if (!headers_sent()) return header("Location: $url");
        echo "<script>window.href='$url'</script>";
    }

    public function Callback(int $ros_app_id, string $ros_authorization)
    {
        // tbd.
    }
}