<?php


namespace App\Builders\Filter;


/**
 * Class CatalogFilterBuilder
 * @package App\Builders\Filter
 */
class CatalogFilterBuilder implements FilterBuilder
{

    /**
     * @var Map
     */
    private $map;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->map = new Map();
    }

    public function properties(): void
    {
        $this->map->setProperty('properties');
    }

    public function virtualProperties(): void
    {
        $this->map->setProperty('virtualProperties');
    }

    public function elasticProperties(): void
    {
        $this->map->setProperty('elasticProperties');
    }

    /**
     * @return Map
     */
    public function getMap(): Map
    {
        return $this->map;
    }

}
