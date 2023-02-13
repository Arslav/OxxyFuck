<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Components;

/**
 * Class Stack
 *
 * @package Arslav\OxxyFuck\Components
 */
class Stack
{
    protected array $stack = [];

    /**
     * @param mixed $value
     *
     * @return void
     */
    public function push(mixed $value): void
    {
        $this->stack[] = $value;
    }

    /**
     * @return int
     */
    public function pop(): int
    {
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
