<?php
include "src/chaine/Chaine_10.php";
use PHPUnit\Framework\TestCase;


class Chaine_10Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(5, getCount("abracadabra"));
    }

  }
  