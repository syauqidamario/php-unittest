<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
      public function testCounter()
      {
            $counter = new Counter();
            $counter->incre();
            Assert::assertEquals(1, $counter->getCount());
            $counter->incre();
            Assert::assertEquals(2, $counter->getCount());
            $counter->incre();
            Assert::assertEquals(3, $counter->getCount());
      }

      /**
       * @test
       */
      public function increment()
      {
            $counter = new Counter();
            $counter->incre();
            $this->assertEquals(1, $counter->getCount());
      }

      public function testFirst(): Counter
      {
            $counter = new Counter();
            $counter->incre();
            $this->assertEquals(1, $counter->getCount());
            return $counter;
      }

      /**
       * @depends testFirst
       */

      public function testSecond(Counter $counter)
      {
            $counter->incre();
            $this->assertEquals(2, $counter->getCount());
      }
}
