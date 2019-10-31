<?php
include "src/chaine/Chaine_4.php";
use PHPUnit\Framework\TestCase;


class Chaine_4Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(1234, stringToNumber("1234"));
      $this->assertEquals(605, stringToNumber("605"));
      $this->assertEquals(1405, stringToNumber("1405"));
      $this->assertEquals(-7, stringToNumber("-7"));
    }

    public function testExamples2() {
      $this->assertSame('67', numberToString(67));
      $this->assertSame('17', numberToString(17));
    }
  }
  