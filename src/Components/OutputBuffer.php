<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck\Components;

/**
 * Class OutputBuffer
 *
 * @package Arslav\OxxyFuck\Components
 */
class OutputBuffer
{
    protected array $output = [];

    /**
     * @param int $value
     *
     * @return void
     */
    public function write(int $value): void
    {
        $this->output[] = $value;
    }

    /**
     * @return void
     */
    public function flush(): void
    {
        $this->output = [];
    }

    /**
     * @return void
     */
    public function print(): void
    {
        echo implode('', array_map('chr', $this->output)) . PHP_EOL;
    }
}
