<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Modify;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class Decrement10
 *
 * @package Arslav\OxxyFuck\Commands\Modify
 */
class Decrement10 extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->memory->setCurrentCell($this->vm->memory->getCurrentCell() - 10);
    }
}
