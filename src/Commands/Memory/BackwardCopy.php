<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class BackwardCopy
 *
 * @package Arslav\OxxyFuck\Commands\Memory
 */
class BackwardCopy extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $cell = $this->vm->memory->getCurrentCell();
        $this->vm->memory->decrementAddress();
        $this->vm->memory->setCurrentCell($cell);
    }
}
