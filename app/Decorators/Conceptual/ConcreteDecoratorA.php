<?php

/**
 * Created by PhpStorm
 * User: Aleksandr Chorniy
 * Date: 25.10.2019
 * Time: 16:17
 */

namespace App\Decorators\Conceptual;


class ConcreteDecoratorA extends Decorator
{

    /**
     * Декораторы могут вызывать родительскую реализацию операции, вместо того,
     * чтобы вызвать обёрнутый объект напрямую. Такой подход упрощает расширение
     * классов декораторов.
     *
     * @return string
     */
    public function operation(): string
    {
        return "ConcreteDecoratorA(".parent::operation().")";
    }

}
