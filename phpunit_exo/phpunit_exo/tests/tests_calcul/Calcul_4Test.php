<?php
include "src/calcul/Calcul_4.php";
use PHPUnit\Framework\TestCase;


class Calcul_4Test extends TestCase {
    public function testExamples() {
      $this->assertTrue(palindrome(1221));
      $this->assertFalse(palindrome(123322));
      }
  }
  