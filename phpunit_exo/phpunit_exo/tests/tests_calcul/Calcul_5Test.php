<?php
include "src/calcul/Calcul_5.php";
use PHPUnit\Framework\TestCase;


class Calcul_5Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(basicOp('+', 4, 7), 11);
      $this->assertEquals(basicOp('-', 15, 18), -3);
      $this->assertEquals(basicOp('*', 5, 5), 25);
      $this->assertEquals(basicOp('/', 49, 7), 7);
      }
  }
  