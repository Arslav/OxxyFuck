<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Binary;

use Arslav\OxxyFuck\Exceptions\OutOfRangeException;
use Arslav\OxxyFuck\Exceptions\DividingByZeroException;

/**
 * Class Division
 *
 * @package Arslav\OxxyFuck\Commands\Binary
 */
class Division extends AbstractBinaryOperation
{
    /**
     * @return void
     * @throws OutOfRangeException
     * @throws DividingByZeroException
     */
    public function execute(): void
    {
        [$first, $second] = $this->getOperands();

        if ($second == 0) {
            throw new DividingByZeroException();
        }
        $this->vm->memory->setCurrentCell($first / $second);
    }
}
