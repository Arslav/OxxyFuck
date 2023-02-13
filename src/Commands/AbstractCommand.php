<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Commands;

use Arslav\OxxyFuck\VirtualMachine;

/**
 * Class AbstractCommand
 *
 * @package Arslav\OxxyFuck\Commands
 */
abstract class AbstractCommand
{
    protected VirtualMachine $vm;

    /**
     * @param VirtualMachine $vm
     */
    public function __construct(VirtualMachine $vm)
    {
        $this->vm = $vm;
    }

    /**
     * @return void
     */
    abstract public function execute(): void;
}
