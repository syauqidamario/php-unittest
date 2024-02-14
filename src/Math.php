<?php

namespace Syauqi\PhpUnittest;

class Math
{
      public static function sum(array $values): int
      {
            $tot = 0;
            foreach ($values as $val) {
                  $tot += $val;
            }
            return $tot;
      }
}
