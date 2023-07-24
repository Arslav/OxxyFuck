<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

use Arslav\OxxyFuck\Commands\AbstractCommand;
use Arslav\OxxyFuck\Exceptions\OutOfRangeException;

/**
 * Class AbstractBinaryOperation
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
abstract class AbstractBinaryOperation extends AbstractCommand
{
    /**
     * @return array
     * @throws OutOfRangeException
     */
    protected function getOperands(): array
    {
        $first = $this->vm->memory->getCurrentCell();
        $this->vm->memory->decrementAddress();
        $second = $this->vm->memory->getCurrentCell();
        $this->vm->memory->incrementAddress();
        $this->vm->memory->incrementAddress();

        return [$first, $second];
    }
}
