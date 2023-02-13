<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class ForwardCopy
 *
 * @package Arslav\OxxyFuck\Commands\Memory
 */
class ForwardCopy extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $cell = $this->vm->memory->getCurrentCell();
        $this->vm->memory->incrementAddress();
        $this->vm->memory->setCurrentCell($cell);
    }
}
