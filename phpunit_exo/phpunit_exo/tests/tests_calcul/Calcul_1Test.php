<?php
include "src/calcul/Calcul_1.php";
use PHPUnit\Framework\TestCase;


class Calcul_1Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(goals(0,0,0), 0);
      $this->assertEquals(goals(43, 10, 5), 58);
    }
  }
  
