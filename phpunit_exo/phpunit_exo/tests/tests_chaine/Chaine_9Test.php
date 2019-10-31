<?php
include "src/chaine/Chaine_9.php";
use PHPUnit\Framework\TestCase;


class Chaine_9Test extends TestCase {
    public function testExamples() {
      $this->assertEquals("TestCase", camel_case("test case"));
      $this->assertEquals("CamelCaseMethod", camel_case("camel case method"));
      $this->assertEquals("SayHello", camel_case("say hello "));
      $this->assertEquals("CamelCaseWord", camel_case(" camel case word"));
      $this->assertEquals("", camel_case(""));
    }

  }
  