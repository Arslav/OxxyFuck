<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

use Arslav\OxxyFuck\Exceptions\OutOfRangeException;

/**
 * Class Multiplication
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Multiplication extends AbstractBinaryOperation
{
    /**
     * @return void
     * @throws OutOfRangeException
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();
        $this->vm->memory->setCurrentCell($first * $second);
    }
}
