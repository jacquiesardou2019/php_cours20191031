<?php
include "src/tableau/tableau_3.php";
use PHPUnit\Framework\TestCase;


class Tableau_3Test extends TestCase {
  
    public function testExamples() {
      $this->assertEquals(['A','B','C','D','A','B'], uniqueInOrder('AAAABBBCCDAABBB'));
    }
  }
  