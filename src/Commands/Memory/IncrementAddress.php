<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class IncrementAddress
 *
 * @package Arslav\OxxyFuck\Commands\Memory
 */
class IncrementAddress extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->memory->incrementAddress();
    }
}
