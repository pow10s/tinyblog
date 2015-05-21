<?php
function arraySum ($addInArray)
{
    $s=0;
    foreach ($addInArray as $key => $value) {
        $s+=$value;
    }
    return $s;

}
function averageArray($a, $b , $c) {
    $a1=arraySum($a);
    $b1=arraySum($b);
    $c1=arraySum($c);
    if ($a1 == $b1 || $b1 == $c1 || $c1 == $a1 ) {
        return "Error";
    }
    elseif(($a1 > $b1 && $a1 < $c1) || ($a1 < $b1 && $a1 > $c1)){
        return $a;
    }
    elseif(($b1 > $a && $b1 < $c1) || ($b1 < $a1 && $b1 > $c1)){
        return $b;
    }
    elseif(($c1 > $a1 && $c1 < $b1) || ($c1 < $a1 && $c1 > $b1)){
        return $c;
    }
}
print_r (averageArray(array(1,2,3,4),array(2,2,8), array(3,2,2)));
