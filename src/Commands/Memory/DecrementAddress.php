<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class DecrementAddress
 *
 * @package Arslav\OxxyFuck\Commands\Memory
 */
class DecrementAddress extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->memory->decrementAddress();
    }
}
