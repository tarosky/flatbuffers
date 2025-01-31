<?php
// automatically generated by the FlatBuffers compiler, do not modify

declare(strict_types=1);

namespace MyGame\Example;

class Race
{
    public const None = -1;
    public const Human = 0;
    public const Dwarf = 1;
    public const Elf = 2;

    /**
     * @var list<string> $names
     */
    private static array $names = array(
        Race::None=>"None",
        Race::Human=>"Human",
        Race::Dwarf=>"Dwarf",
        Race::Elf=>"Elf",
    );

    /**
     * @param int $e
     * @return string
     */
    public static function Name(int $e): string
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}
