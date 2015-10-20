<?php
namespace DrdPlus\Races\Elfs;

class DarkElf extends Elf
{
    const DARK = 'dark';

    /**
     * @return static
     */
    public static function getIt()
    {
        return parent::getIt(self::DARK);
    }

    public function getSubraceCode()
    {
        return self::DARK;
    }

}
