<?php
namespace Test;
use PHPUnit\Framework\TestCase;
class MayTinhTest extends TestCase {
  public function test_case_1(){
    $a = 7;
    $b = 3;

    $objMaytinh = new Maytinh();
    $your_ouput = $objMaytinh->sum($a,$b);
    $expect_output=10;
    $this->assertEquals($your_ouput,$expect_output);
  }
}