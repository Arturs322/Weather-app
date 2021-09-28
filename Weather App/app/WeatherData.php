<?php

namespace App;

class WeatherData
{
    public array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}