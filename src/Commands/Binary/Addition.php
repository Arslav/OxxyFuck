<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

/**
 * Class Addition
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Addition extends AbstractBinaryOperation
{
    /**
     * @return void
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();
        $this->vm->memory->setCurrentCell($first + $second);
    }
}
