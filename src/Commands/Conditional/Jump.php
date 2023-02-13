<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Conditional;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class Jump
 *
 * @package Arslav\OxxyFuck\Commands\Conditional
 */
class Jump extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        if ($this->vm->memory->getCurrentCell() === 0) {
            return;
        }

        $this->vm->setPosition($this->vm->stack->pop());
    }
}
