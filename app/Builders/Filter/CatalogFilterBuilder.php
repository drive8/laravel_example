<?php

/**
 * Created by PhpStorm
 * User: Aleksandr Chorniy
 * Date: 22.10.2019
 * Time: 13:38
 */

namespace App\Builders\Filter;


class CatalogFilterBuilder implements FilterBuilder
{

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

    public function getMap(): Map
    {
        return $this->map;
    }

}
