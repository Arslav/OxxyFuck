<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

/**
 * Class Subtraction
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Subtraction extends AbstractBinaryOperation
{
    /**
     * @return void
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();
        $this->vm->memory->setCurrentCell($first - $second);
    }
}
