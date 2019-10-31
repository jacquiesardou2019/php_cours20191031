<?php
include "src/chaine/Chaine_6.php";
use PHPUnit\Framework\TestCase;


class Chaine_6Test extends TestCase {
    public function testExamples() {
      $this->assertEquals('UUUU', dnaToRna("TTTT"));
    $this->assertEquals('GCAU', dnaToRna("GCAT"));
    $this->assertEquals("", dnaToRna(""));
    $this->assertEquals('U', dnaToRna("T"));
    $this->assertEquals('GACCGCCGCC', dnaToRna("GACCGCCGCC"));
    $this->assertEquals('GAUUCCACCGACUUCCCAAGUACCGGAAGCGCGACCAACUCGCACAGC', dnaToRna("GATTCCACCGACTTCCCAAGTACCGGAAGCGCGACCAACTCGCACAGC"));
    $this->assertEquals('CACGACAUACGGAGCAGCGCACGGUUAGUACAGCUGUCGGUGAACUCCAUGACA', dnaToRna("CACGACATACGGAGCAGCGCACGGTTAGTACAGCTGTCGGTGAACTCCATGACA"));
    $this->assertEquals('CACGACAUACGGAGCAGCGCACGGUUAGUACAGCUGUCGGUGAACUCCAUGACA', dnaToRna("CACGACATACGGAGCAGCGCACGGTTAGTACAGCTGTCGGTGAACTCCATGACA"));
    $this->assertEquals('AACCCUGUCCACCAGUAACGUAGGCCGACGGGAAAAAUAAACGAUCUGUCAAUG', dnaToRna("AACCCTGTCCACCAGTAACGTAGGCCGACGGGAAAAATAAACGATCTGTCAATG"));
 
    }

  }
  