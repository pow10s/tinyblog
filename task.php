<?php
	

function averageNumber($numberA, $numberB, $numberC) {
if ($numberA == $numberB || $numberB==$numberC || $numberC==$numberA ) {
echo "Error";
}
elseif(($numberA> $numberB && $numberA <$numberC) || ($numberA<$numberB && $numberA >$numberC)){
echo $numberA;
}
elseif(($numberB>$numberA && $numberB<$numberC) || ($numberB<$numberA && $numberB>$numberC)){
echo $numberB;
}
elseif(($numberC>$numberA && $numberC<$numberB) || ($numberC<$numberA && $numberC>$numberB)){
echo $numberC;
}
}
averageNumber('7','15','144');