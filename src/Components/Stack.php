<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Components;

use Arslav\OxxyFuck\Env;
use Arslav\OxxyFuck\Exceptions\EmptyStackException;
use Arslav\OxxyFuck\Exceptions\StackOverflowException;

/**
 * Class Stack
 *
 * @package Arslav\OxxyFuck\Components
 */
class Stack
{
    protected int $size;

    protected array $stack = [];

    public function __construct()
    {
        $this->size = (int) Env::stackSize() ?: 100;
    }


    /**
     * @param mixed $value
     *
     * @return void
     *
     * @throws StackOverflowException
     */
    public function push(mixed $value): void
    {
        if (count($this->stack) > $this->size) {
            throw new StackOverflowException();
        }
        $this->stack[] = $value;
    }

    /**
     * @return int
     *
     * @throws EmptyStackException
     */
    public function pop(): int
    {
        if (count($this->stack) == 0) {
            throw new EmptyStackException();
        }
        return array_pop($this->stack);
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->stack = [];
    }
}
