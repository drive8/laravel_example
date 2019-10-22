<?php


namespace App\Builders\Filter;


class Director
{

    /**
     * @var CatalogFilterBuilder
     */
    private $builder;

    public function setBuilder(FilterBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildSimpleFilterMap(): void
    {
        $this->builder->properties();
        $this->builder->virtualProperties();
    }

    public function buildFilterMap(): void
    {
        //dd($this->builder);
        $this->builder->properties();
        $this->builder->virtualProperties();
        $this->builder->elasticProperties();
        //dd($this->builder);
    }

}
