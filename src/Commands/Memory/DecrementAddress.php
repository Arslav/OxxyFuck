<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;
use Arslav\OxxyFuck\Exceptions\OutOfRangeException;

/**
 * Class DecrementAddress
 *
 * @package Arslav\OxxyFuck\Commands\Memory
 */
class DecrementAddress extends AbstractCommand
{
    /**
     * @return void
     * @throws OutOfRangeException
     */
    public function execute(): void
    {
        $this->vm->memory->decrementAddress();
    }
}
