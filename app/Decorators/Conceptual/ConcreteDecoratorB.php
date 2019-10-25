<?php

/**
 * Created by PhpStorm
 * User: Aleksandr Chorniy
 * Date: 25.10.2019
 * Time: 16:17
 */

namespace App\Decorators\Conceptual;


/**
 * Декораторы могут выполнять своё поведение до или после вызова обёрнутого
 * объекта.
 *
 * Class ConcreteDecoratorB
 * @package App\Decorators\Conceptual
 */
class ConcreteDecoratorB extends Decorator
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
        return "ConcreteDecoratorB(".parent::operation().")";
    }

}
