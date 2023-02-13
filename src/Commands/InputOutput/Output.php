<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\InputOutput;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class Output
 *
 * @package Arslav\OxxyFuck\Commands\InputOutput
 */
class Output extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->outputBuffer->write($this->vm->memory->getCurrentCell());
    }
}
