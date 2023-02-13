<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

/**
 * Class Multiplication
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Multiplication extends AbstractBinaryOperation
{
    /**
     * @return void
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();
        $this->vm->memory->setCurrentCell($first * $second);
    }
}
