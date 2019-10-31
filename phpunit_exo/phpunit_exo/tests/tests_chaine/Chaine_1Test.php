<?php
include "src/chaine/Chaine_1.php";
use PHPUnit\Framework\TestCase;


class Chaine_1Test extends TestCase {
    public function testExamples() {
      $this->assertEquals("dlrow", solution("world"));
      $this->assertEquals("olleh", solution("hello"));
      $this->assertEquals("", solution(""));
      $this->assertEquals('h', solution("h"));
    }
  }
  