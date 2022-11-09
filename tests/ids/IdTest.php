<?php

use \PHPUnit\Framework\TestCase;
use extas\components\THasStringId;
use extas\components\UUID;
use extas\interfaces\IHaveUUID;

/**
 * Class IdTest
 * @author jeyroik <jeyroik@gmail.com>
 */
class IdTest extends TestCase
{    
    public function testUuid(): void
    {
        $obj = new class () implements IHaveUUID {
            use THasStringId;
            protected array $config = [];
        };

        UUID::setId($obj);

        $this->assertNotEmpty($obj->getId());
        $this->assertEquals(36, strlen($obj->getId()));
    }
}
