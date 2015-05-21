<?php
function arrayOne ($addInArrayOne)
    {
        $arrayOne = array();
        array_push($arrayOne, $addInArrayOne);
        foreach ($arrayOne as $key => $valueOne) {
            $s=array_sum($valueOne);
            return $s;
        }
    }

function arrayTwo ($addInArrayTwo)
{
    $arrayTwo = array();
    array_push($arrayTwo, $addInArrayTwo);
    foreach ($arrayTwo as $key => $valueTwo) {
        $s=array_sum($valueTwo);
        return $s;

    }
}

function arrayThree ($addInArrayThree)
{
    $arrayThree = array();
    array_push($arrayThree, $addInArrayThree);
    foreach ($arrayThree as $key => $valueThree) {
        $s=array_sum($valueThree);
        return $s;
    }
}

function averageArray($a, $b , $c) {
    if ($a == $b || $b == $c || $c == $a ) {
        return "Error";
    }
    elseif(($a > $b && $a < $c) || ($a < $b && $a > $c)){
        return $a;
    }
    elseif(($b > $a && $b < $c) || ($b < $a && $b > $c)){
        return $b;
    }
    elseif(($c > $a && $c < $b) || ($c < $a && $c > $b)){
        return $c;
    }
}
$a = arrayOne(array(1,2,1));
$b = arrayTwo(array(1,2,2));
$c = arrayThree(array(1,2,3));
echo averageArray($a,$b,$c);