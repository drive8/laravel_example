<?php


namespace App\Builders\Filter;


class Map
{
    private $properties = [];

    public function setProperty(string $property): void
    {
        $this->properties[] = $property;
    }

    public function listProperties(): string 
    {
        return "Filter map: " . implode(', ', $this->properties) . "\n";
    }
}
