<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Conditional;

use Arslav\OxxyFuck\Commands\AbstractCommand;
use Arslav\OxxyFuck\Exceptions\EmptyStackException;

/**
 * Class Jump
 *
 * @package Arslav\OxxyFuck\Commands\Conditional
 */
class Jump extends AbstractCommand
{
    /**
     * @return void
     * @throws EmptyStackException
     */
    public function execute(): void
    {
        if ($this->vm->memory->getCurrentCell() === 0) {
            return;
        }

        $this->vm->setPosition($this->vm->stack->pop());
    }
}
