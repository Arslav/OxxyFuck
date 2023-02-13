<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands\Memory;

use Arslav\OxxyFuck\Commands\AbstractCommand;

/**
 * Class Clear
 *
 * @package Arslav\OxxyFuck\Commands\Conditional
 */
class Stop extends AbstractCommand
{
    /**
     * @return void
     */
    public function execute(): void
    {
        $this->vm->setPosition($this->vm->getCommandsCount());
    }
}
