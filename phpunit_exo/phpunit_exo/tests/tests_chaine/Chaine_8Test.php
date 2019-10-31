<?php
include "src/chaine/Chaine_8.php";
use PHPUnit\Framework\TestCase;


class Chaine_8Test extends TestCase {
    public function testExamples() {
      $this->assertEquals(["Hello", "hEllo", "heLlo", "helLo", "hellO"], wave("hello"));
      $this->assertEquals([], wave(""));
      $this->assertEquals(["Two words", "tWo words", "twO words", "two Words", "two wOrds", "two woRds", "two worDs", "two wordS"], wave("two words"));
      $this->assertEquals([" Gap ", " gAp ", " gaP "], wave(" gap "));
 
    }

  }
  