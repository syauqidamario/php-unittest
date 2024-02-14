<?php

namespace Syauqi\PhpUnittest;

class Person
{
      public function __construct(private string $name)
      {
      }

      public function sayHi(?string $name): string
      {
            if ($name == null) throw new \Exception('No name!');
            return "Hi $name, my name is $this->name";
      }
}
