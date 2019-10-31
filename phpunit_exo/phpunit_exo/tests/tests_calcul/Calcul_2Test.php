<?php
include "src/calcul/Calcul_2.php";
use PHPUnit\Framework\TestCase;


class Calcul_2Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(23, solution(10));
    }
  }
  