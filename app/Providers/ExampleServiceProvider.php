<?php

namespace App\Providers;


use App\Builders\Filter\CatalogFilterBuilder;
use App\Builders\Filter\Director;
use App\Decorators\Conceptual\ConcreteComponent;
use App\Decorators\Conceptual\ConcreteDecoratorA;
use App\Decorators\Conceptual\ConcreteDecoratorB;
use App\Models\Catalog\Product;
use App\Models\Catalog\Section;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->sections();
        $this->filterProperties();
        $this->products();
        $this->concreteDecorator();
    }

    public function sections()
    {
        View::composer(['welcome'], function($view){
            $sections = Section::orderBy('active', 'desc')->orderBy('sort')->simplePaginate(3);
            $view->with('sections', $sections);
        });
    }

    public function filterProperties()
    {
        View::composer(['welcome'], function($view){
            $director = new Director;
            $builder = new CatalogFilterBuilder();
            $director->setBuilder($builder);
            $director->buildFilterMap();
            $properties = $builder->getMap()->listProperties();
            $view->with('properties', $properties);
        });
    }

    public function products()
    {
        View::composer(['welcome'], function($view){
            $products = Product::orderBy('id')->orderBy('sort')->simplePaginate(10);
            $view->with('products', $products);
        });
    }

    public function concreteDecorator()
    {
        View::composer(['welcome'], function($view){
            $result = [];

            // клиентский код может поддерживать как простые компоненты...
            $simple = new ConcreteComponent;
            $result[] = "Client: I've got a simple component:";
            $result[] = "RESULT: " . $simple->operation();

            // ...так и декорированные.
            // Обратите внимание, что декораторы могут обёртывать не только простые
            // компоненты, но и другие декораторы.
            $decorator1 = new ConcreteDecoratorA($simple);
            $decorator2 = new ConcreteDecoratorB($decorator1);
            $result[] = "Client: Now I've got a decorated component:";
            $result[] = "RESULT: " . $decorator2->operation();
            $view->with('concreteDecorator', $result);
        });
    }

}
