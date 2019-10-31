<?php
include "src/calcul/Calcul_3.php";
use PHPUnit\Framework\TestCase;


class Calcul_3Test extends TestCase {
    public function testExamples() {
      $this->assertFalse(is_prime(0));
      $this->assertFalse(is_prime(1));
      $this->assertTrue(is_prime(2));
       }
  }
  