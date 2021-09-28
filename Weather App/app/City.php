<?php

namespace App;

class City
{
    public string $name;
    public int $temp;
    public string $condition;

    public function __construct(string $name, int $temp, string $condition)
    {
        $this->name = $name;
        $this->temp = $temp;
        $this->condition = $condition;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getCondition(): string
    {
        return $this->condition;
    }
    public function getInfo()
    {
        return "Location: {$this->name}, temperature: {$this->temp}, condition {$this->condition}";
    }


    public function getTemp(): int
    {
        return $this->temp;
    }
}