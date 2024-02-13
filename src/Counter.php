<?php

namespace Syauqi\PhpUnittest;

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
