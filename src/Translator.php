<?php

declare(strict_types=1);

namespace Arslav\OxxyFuck;

use Arslav\OxxyFuck\Commands\Memory\Stop;
use Arslav\OxxyFuck\Commands\Modify\SetZero;
use Arslav\OxxyFuck\Commands\AbstractCommand;
use Arslav\OxxyFuck\Commands\Binary\Addition;
use Arslav\OxxyFuck\Commands\Binary\Division;
use Arslav\OxxyFuck\Commands\Conditional\Jump;
use Arslav\OxxyFuck\Commands\Modify\Increment;
use Arslav\OxxyFuck\Commands\Modify\Decrement;
use Arslav\OxxyFuck\Commands\InputOutput\Output;
use Arslav\OxxyFuck\Commands\Modify\Increment10;
use Arslav\OxxyFuck\Commands\Modify\Decrement10;
use Arslav\OxxyFuck\Commands\Memory\ForwardCopy;
use Arslav\OxxyFuck\Commands\Binary\Subtraction;
use Arslav\OxxyFuck\Commands\Memory\BackwardCopy;
use Arslav\OxxyFuck\Commands\Conditional\SetLabel;
use Arslav\OxxyFuck\Commands\Binary\Multiplication;
use Arslav\OxxyFuck\Commands\Memory\IncrementAddress;
use Arslav\OxxyFuck\Commands\Memory\DecrementAddress;

/**
 * Class Translator
 *
 * @package Arslav\OxxyFuck
 */
class Translator
{
    protected array $commands;

    /**
     * @param VirtualMachine $vm
     */
    public function __construct(VirtualMachine $vm)
    {
        $this->commands = [
            'говно' => new SetZero($vm),
            'залупа' => new Increment($vm),
            'пенис' => new Increment10($vm),
            'хер' => new Multiplication($vm),
            'давалка' => new Addition($vm),
            'хуй' => new Subtraction($vm),
            'блядина' => new Division($vm),
            'головка' => new IncrementAddress($vm),
            'шлюха' => new DecrementAddress($vm),
            'жопа' => new Output($vm),
            'член' => new SetLabel($vm),
            'еблан' => new Jump($vm),
            'петух' => new Decrement($vm),
            'мудила' => new Decrement10($vm),
            'рукоблуд' => new ForwardCopy($vm),
            'ссанина' => new BackwardCopy($vm),
            'раунд' => new Stop($vm)
        ];
    }

    /**
     * @param string $code
     *
     * @return AbstractCommand|null
     */
    public function getCommand(string $code): ?AbstractCommand
    {
        return $this->commands[$code] ?? null;
    }

}
