<?php
include "src/chaine/Chaine_7.php";
use PHPUnit\Framework\TestCase;


class Chaine_7Test extends TestCase {
    public function testExamples() {
      $this->assertEquals("h e l l o   w o r l d", spacify("hello world"));
      $this->assertEquals("1 2 3 4 5", spacify("12345"));
    }

  }
  