
<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
/**
 * @coversDefaultClass \noreplysims\VarsityOnline\HelloWorld
 */
class HelloWorldTest extends TestCase{
  protected $hello;
  
  public function setUp(){//this part of the code initiates the hello variable
    $this->hello = new \noreplysims\VarsityOnline\HelloWorld();
  }
  /**
   * @covers ::world
   */
  public function testHelloWorld(){//this part of the code checks if the value returned by the world() method is equal to word
    $this->assertSame('world',$this->hello->world());
  }
}
