<?php
include "src/tableau/tableau_1.php";
use PHPUnit\Framework\TestCase;


class Tableau_1Test extends TestCase {
  
    public function testExamples() {
      $this->assertEquals(["head", "body", "tail"],fixTheMeerkat(["tail", "body", "head"]));
      $this->assertEquals(["heads", "body", "tails"], fixTheMeerkat(["tails", "body", "heads"]));
      $this->assertEquals(["top", "middle", "bottom"], fixTheMeerkat(["bottom", "middle", "top"]));
      $this->assertEquals(["upper legs", "torso", "lower legs"], fixTheMeerkat(["lower legs", "torso", "upper legs"]));
      $this->assertEquals(["sky", "rainbow", "ground"], fixTheMeerkat(["ground", "rainbow", "sky"]));
  
    }
  }
  