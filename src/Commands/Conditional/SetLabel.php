<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Conditional;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class SetLabel
 *
 * @package Arslav\OxxyFuck\Commands\Conditional
 */
class SetLabel extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->stack->push($this->vm->getPosition());
    }
}
