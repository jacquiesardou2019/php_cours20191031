<?php
include "src/chaine/Chaine_2.php";
use PHPUnit\Framework\TestCase;


class Chaine_2Test extends TestCase {
    public function testExamples() {
      $this->assertEquals('loquen', remove_char('eloquent'));
      $this->assertEquals('ountr', remove_char('country'));
      $this->assertEquals('erso', remove_char('person'));
      $this->assertEquals('lac', remove_char('place'));
    }
  }
  