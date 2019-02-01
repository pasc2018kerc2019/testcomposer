<?php
require('./src/Math.php');
use PHPUnit\Framework\TestCase;
class MathTest extends Testcase{
    public function testDouble(){
     $this->assertequals(4,Math::double(2));
    }
}