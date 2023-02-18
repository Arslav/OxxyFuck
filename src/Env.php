<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck;

/**
 * Class Env
 *
 * @package Arslav\OxxyFuck
 *
 * @method static memorySize()
 * @method static stackSize()
 */
class Env
{
    protected const PREFIX = 'APP';
    /**
     * @param $name
     * @param $arguments
     *
     * @return string
     */
    public static function __callStatic($name, $arguments)
    {
        $value = getenv(self::PREFIX . strtoupper(self::camelCaseToUnderscore($name)));

        return $value ? (string) $value : '';
    }

    /**
     * @param string $value
     *
     * @return string
     */
    private static function camelCaseToUnderscore(string $value): string
    {
        return preg_replace_callback('/([A-Z])/', fn ($param) =>  '_' . strtolower($param[1]), $value);
    }
}
