<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

/**
 * Class Division
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Division extends AbstractBinaryOperation
{
    /**
     * @return void
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();

        //TODO: Ошибка в случае деления на 0
        $this->vm->memory->setCurrentCell($first / $second);
    }
}
