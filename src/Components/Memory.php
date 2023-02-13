<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Components;

/**
 * Class Memory
 *
 * @package Arslav\OxxyFuck\Components
 */
class Memory
{
    protected array $memory = [];
    protected int $size;
    protected int $address = 0;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
        $this->clear();
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->memory = array_fill(0, $this->size, 0);
        $this->address = 0;
    }

    /**
     * @return int
     */
    public function getCurrentCell(): int
    {
        return $this->memory[$this->address];
    }

    /**
     * @param int $value
     *
     * @return void
     */
    public function setCurrentCell(int $value): void
    {
        $this->memory[$this->address] = $value;
    }

    /**
     * @return void
     */
    public function incrementAddress(): void
    {
        $this->address++;
    }

    /**
     * @return void
     */
    public function decrementAddress(): void
    {
        $this->address--;
    }
}
