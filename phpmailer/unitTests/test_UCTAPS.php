<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class markWitsTest extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/WITSAPS.php');
   $tests=UCT_APS(79);
 $this->assertEquals(6,$tests, "correct!"); 
 }
 
}
?>