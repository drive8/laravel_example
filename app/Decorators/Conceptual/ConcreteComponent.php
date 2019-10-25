<?php

/**
 * Created by PhpStorm
 * User: Aleksandr Chorniy
 * Date: 25.10.2019
 * Time: 16:02
 */


namespace App\Decorators\Conceptual;


/**
 * Конкретные Компоненты предоставляют реализации поведения по умолчанию. Может
 * быть несколько вариаций этих классов.
 *
 * Class ConcreteComponent
 * @package App\Decorators\Conceptual
 */
class ConcreteComponent implements Component
{

    public function operation(): string
    {
        return 'ConcreteComponent';
    }

}
