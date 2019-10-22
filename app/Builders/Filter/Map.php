<?php


namespace App\Builders\Filter;

/**
 * Class Map
 * @package App\Builders\Filter
 */
class Map
{
    /**
     * @var array
     */
    private $properties = [];

    /**
     * @param string $property
     */
    public function setProperty(string $property): void
    {
        $this->properties[] = $property;
    }

    /**
     * @return string
     */
    public function listProperties(): string
    {
        return "Filter map: " . implode(', ', $this->properties) . "\n";
    }
}
