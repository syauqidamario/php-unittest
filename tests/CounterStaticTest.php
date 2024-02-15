<?php

namespace Syauqi\Test;

use PHPUnit\Framework\Constraint\Count;
use PHPUnit\Framework\TestCase;
use Syauqi\PhpUnittest\Counter;

class CounterStaticTest extends TestCase
{
    static private Counter $counter;

    public static function setUpBeforeClass(): void
    {
       self::$counter = new Counter();
    }

    public function testFirst()
    {
        self::$counter->incre();
        self::assertEquals(1, self::$counter->getCount());
    }

    public function testSecond()
    {
        self::$counter->incre();
        self::assertEquals(2, self::$counter->getCount());
    }
}