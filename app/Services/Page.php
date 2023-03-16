<?php

namespace App\Services;


class Page
{
    public static function part($part_name)
    {
       require_once "src/components/" . $part_name . ".php";
    }
}