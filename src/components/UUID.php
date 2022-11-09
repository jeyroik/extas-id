<?php
namespace extas\components;

use extas\interfaces\IHaveUUID;
use Ramsey\Uuid\Uuid as UuidRamsey;

class UUID
{
    public static function setId(IHaveUUID &$item, int $version = 4): void
    {
        $item->setId(static::getId($version));
    }

    public static function getId(int $version = 4): string
    {
        $method = 'uuid' . $version;
        return UuidRamsey::$method()->toString();
    }
}
