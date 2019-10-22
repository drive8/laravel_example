<?php


namespace App\Builders\Filter;


interface FilterBuilder
{
    public function properties(): void;

    public function virtualProperties(): void;

    public function elasticProperties(): void;
}
