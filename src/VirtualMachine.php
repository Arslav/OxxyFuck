<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck;

use Arslav\OxxyFuck\Components\Stack;
use Arslav\OxxyFuck\Components\Memory;
use Arslav\OxxyFuck\Components\OutputBuffer;

/**
 * Class VirtualMachine
 *
 * @package Arslav\OxxyFuck
 */
class VirtualMachine
{
    public Memory $memory;
    public Stack $stack;
    public OutputBuffer $outputBuffer;

    protected Translator $translator;

    protected array $commands = [];
    protected int $position = 0;

    /**
     * @param int $size
     */
    public function __construct(int $size = 3000)
    {
        $this->memory = new Memory($size);
        $this->stack = new Stack();
        $this->outputBuffer = new OutputBuffer();
        $this->translator = new Translator($this);
    }

    /**
     * @param string $code
     *
     * @return void
     */
    public function load(string $code): void
    {
        $code = str_replace(["\t", " ", "\r"], '', $code);
        $code = str_replace(["\n"], ',', $code);
        $this->commands = array_map(fn ($value) => mb_strtolower(trim($value)), explode(',', $code));
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getCommandsCount(): int
    {
        return count($this->commands);
    }

    /**
     * @return void
     */
    public function run(): void
    {
        while ($this->position < $this->getCommandsCount()) {
            $operator = $this->commands[$this->position];
            $this->translator->getCommand($operator)?->execute();
            $this->position++;
        }
        $this->outputBuffer->print();
        $this->reset();
    }

    /**
     * @return void
     */
    protected function reset(): void
    {
        $this->position = 0;
        $this->memory->clear();
        $this->outputBuffer->flush();
        $this->stack->clear();
    }
}
