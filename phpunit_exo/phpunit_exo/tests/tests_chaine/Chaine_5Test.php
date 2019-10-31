<?php
include "src/chaine/Chaine_5.php";
use PHPUnit\Framework\TestCase;


class Chaine_5Test extends TestCase {
    public function testExamples() {
      $this->assertEquals("S.H", abbrevName("Sam Harris"));
      $this->assertEquals("P.F", abbrevName("Patrick Feenan"));
      $this->assertEquals("E.C", abbrevName("Evan Cole"));
      $this->assertEquals("P.F", abbrevName("P Favuzzi"));
      $this->assertEquals("D.M", abbrevName("David Mendieta"));
    }

  }
  