<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
      public function testCounter()
      {
            $counter = new Counter();
            $counter->incre();
            echo $counter->getCount() . PHP_EOL;
      }
}
