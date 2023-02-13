<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Modify;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class Increment
 *
 * @package Arslav\OxxyFuck\Commands\Modify
 */
class Increment extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->memory->setCurrentCell($this->vm->memory->getCurrentCell() + 1);
    }
}
