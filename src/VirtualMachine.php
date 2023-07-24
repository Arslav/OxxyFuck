<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck;

use Arslav\OxxyFuck\Components\Stack;
use Arslav\OxxyFuck\Components\Memory;
use Arslav\OxxyFuck\Components\OutputBuffer;
use Arslav\OxxyFuck\Exceptions\RuntimeException;
use Arslav\OxxyFuck\Exceptions\OutOfRangeException;

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

    public function __construct()
    {
        $this->memory = new Memory();
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
     *
     * @throws RuntimeException
     */
    public function run(): void
    {
        try {
            while ($this->position < $this->getCommandsCount()) {
                $operator = $this->getCurrentOperator();
                $this->translator->getCommand($operator)?->execute();
                $this->position++;

            }
        } catch (RuntimeException $exception) {
            throw new RuntimeException(
                sprintf(
                    'Position: %s, operator "%s"',
                    $this->position,
                    $this->getCurrentOperator()
                ),
                0,
                $exception
            );
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

    /**
     * @return string
     * @throws OutOfRangeException
     */
    protected function getCurrentOperator(): string
    {
        if (!isset($this->commands[$this->position])) {
            throw new OutOfRangeException();
        }

        return $this->commands[$this->position];
    }
}
