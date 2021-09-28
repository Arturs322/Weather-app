<?php

namespace App;

class Day3 extends City
{
    public function __construct(string $name, int $temp, string $condition)
    {
        parent::__construct($name, $temp, $condition);
    }
    public function getInfo()
    {
        return parent::getInfo();
    }
}