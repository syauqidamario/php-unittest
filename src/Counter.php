<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Count;

class Counter
{
      private int $count = 0;

      public function incre(): void
      {
            $this->count++;
      }

      public function getCount(): int
      {
            return $this->count;
      }
}
