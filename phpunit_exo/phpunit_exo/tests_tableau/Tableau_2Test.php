<?php
include "src/tableau/tableau_2.php";
use PHPUnit\Framework\TestCase;


class Tableau_2Test extends TestCase {
  
    public function testExamples() {
      $this->assertEquals(22, sum_mix([9, 3, '7', '3']));
      $this->assertEquals(42, sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7]));
      $this->assertEquals(41, sum_mix(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']));
  
    }
  }
  