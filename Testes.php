<?php 
class Testes extends \PHPUnit\Framework\TestCase
{
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
}


?>