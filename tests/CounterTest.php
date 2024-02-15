<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $count;

    protected function setUp():void
    {
        $this->count = new Counter();
        echo "Creating a counter" . PHP_EOL;
    }

    public function testIncrement()
    {
        self::assertEquals(0, $this->count->getCount());
        self::markTestIncomplete("TODO do increment");
        echo "TEST TEST" . PHP_EOL;
        //TODO call increment
    }

    public function testCounter()
    {
        $this->count->incre();
        Assert::assertEquals(1, $this->count->getCount());

        $this->count->incre();
        $this->assertEquals(2, $this->count->getCount());

        $this->count->incre();
        self::assertEquals(3, $this->count->getCount());
    }

    public function incre(){
        self:self::markTestSkipped("Skip unit test");
        self::assertEquals(0, $this->count->getCount());
        $this->count->incre();
        Assert::assertEquals(1, $this->count->getCount());
    }

    public function testFirst(): Counter
    {
        $this->count->incre();
        $this->assertEquals(1, $this->count->getCount());

        return $this->count;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->incre();
        $this->assertEquals(2, $counter->getCount());
    }

    protected function tearDown(): void
    {
        echo "Tear Down" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        echo "After" . PHP_EOL;
    }
}