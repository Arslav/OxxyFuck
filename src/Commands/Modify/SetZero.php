<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Modify;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class ClearCell
 *
 * @package Arslav\OxxyFuck\Commands\Modify
 */
class SetZero extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->memory->setCurrentCell(0);
    }
}
