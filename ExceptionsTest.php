<?php
class ExceptionsTest extends \PHPUnit\Framework\TestCase
{

    public function testException () : void
{
$this -> expectException ( InvalidArgumentException :: class );
}
}




?>