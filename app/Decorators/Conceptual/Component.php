<?php

/**
 * Created by PhpStorm
 * User: Aleksandr Chorniy
 * Date: 25.10.2019
 * Time: 15:59
 */

namespace App\Decorators\Conceptual;

/**
 * Базовый интерфейс Компонента определяет поведение, которое изменяется декораторами
 *
 * Interface Component
 * @package App\Decorators\Conceptual
 */
interface Component
{
    public function operation(): string;
}
