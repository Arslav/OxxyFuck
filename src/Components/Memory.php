<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Components;

use Arslav\OxxyFuck\Env;
use Arslav\OxxyFuck\Exceptions\OutOfRangeException;

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

    public function __construct()
    {
        $this->size = (int) Env::memorySize() ?: 3000;
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
     *
     * @throws OutOfRangeException
     */
    public function incrementAddress(): void
    {
        $this->address++;

        if ($this->address > $this->size) {
            throw new OutOfRangeException();
        }
    }

    /**
     * @return void
     *
     * @throws OutOfRangeException
     */
    public function decrementAddress(): void
    {
        $this->address--;

        if ($this->address < 0) {
            throw new OutOfRangeException();
        }
    }
}
