<?php


namespace App\Builders\Filter;


/**
 * Class Director
 * @package App\Builders\Filter
 */
class Director
{

    /**
     * @var CatalogFilterBuilder
     */
    private $builder;

    /**
     * @param FilterBuilder $builder
     */
    public function setBuilder(FilterBuilder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * Build simple filter map
     */
    public function buildSimpleFilterMap(): void
    {
        $this->builder->properties();
        $this->builder->virtualProperties();
    }

    /**
     * Build filter map
     */
    public function buildFilterMap(): void
    {
        $this->builder->properties();
        $this->builder->virtualProperties();
        $this->builder->elasticProperties();
    }

}
