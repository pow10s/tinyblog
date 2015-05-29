<?php
class Ships {
    var $v;
    function value ($length, $width, $height) {
        $this->v = $length * $width * $height;
        return $this->v;
    }
}
class Ship extends Ships {
    var $res;
    function __valueShip($length, $width, $height){
       $this->res=parent::value($length, $width, $height);
        return $this->res;
    }
}
class SpaceShip extends Ships {
    var $res;
    function __valueSpaceShip($length, $width, $height){
        $this->res=parent::value($length, $width, $height);
        return $this->res;
    }
}
$object = new Ship();
echo "This is ship.\nWith value: ". $object ->__valueShip(1,2,3)."<br>";
$object = new SpaceShip();
echo "This is space ship.\nWith value: ".$object ->__valueSpaceShip(2,2,8);


