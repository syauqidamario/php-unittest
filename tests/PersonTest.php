<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
      public function testSuccess()
      {
            $person = new Person("Syauqi");
            self::assertEquals("Hi Johnny, my name is Syauqi", $person->sayHi("Syauqi"));
      }

      public function testException()
      {
            $person = new Person("Syauqi");
            $this->expectException(\Exception::class);
            $person->sayHi(null);
      }

      public function testOutput()
      {
          $person = new Person("Syauqi");
          $this->expectOutputString("Goodbye Johnny" . PHP_EOL);
          $person->sayGoodBye("Johnny");
      }
}
