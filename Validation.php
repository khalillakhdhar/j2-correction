<?php
 class Validation
 {
function verifNotNull($x)
{
    return $x!=0;

}
function verifSoustraction($a,$b)
{
return $a-$b>0;
}
function verifDifference($x,$y)
{
    if($x!=$y)
    return true;
    else return false;
}
function verifParite($p)
{
    if($p%2==0)
    return true;
    else 
    return false;
}

 }




?>