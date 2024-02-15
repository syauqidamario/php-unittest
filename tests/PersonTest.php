<?php

namespace Syauqi\PhpUnittest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;
    /**
     *@before
     */
    public function createPerson():void{
        $this->person = new Person("Syauqi");
    }
    protected function setUp():void{
        $this->person = new Person("Syauqi");
    }
      public function testSuccess()
      {
           self::assertEquals("Hi Johnny, my name is Syauqi", $this->person->sayHi("Johnny"));
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
