<?php 
require("validation.php");
class Testes extends \PHPUnit\Framework\TestCase
{
    public $v;
/** @before */
public function init()
{
    $this->v=new Validation();

}


/** @test */
function testNom()
{
    $nom="Khalil lakhdhar";
    $this->assertGreaterThan(1,str_word_count($nom));
}
/** @test */
function testClasse()
{
    $classe="CVD1";
    $this-> assertEquals(4,strlen($classe), "la classe doit être de 4 caractéres");
}
/** @test */
public function testNote()
{
    $note=17;
    $this->assertGreaterThan(0,$note);
}
/** @test */
public function testDiv()
{
    
    $b=4;
    $this->assertTrue($this->v->verifNotNull($b));
}
/** @test */
public function TestSoustraction()
{
$a=12;
$b=10;
$this->assertTrue($this->v->verifSoustraction($a,$b));

}
/** @test */
public function notEgale()
{
    $x=5;
    $y=4;
    $this->assertTrue($this->v->verifDifference($x,$y));

}
/** @test */
public function testParite()
{
    $p=20;
    $this->assertTrue($this->v->verifParite($p),"le paramétre est impaire!");
}
}


?>