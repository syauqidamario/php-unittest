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
}
