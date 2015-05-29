<?php
class TypesShip {
    protected $value;
    public function getValue () {
        $this -> value;
    }
    public function setValue ($length,$width,$height){
        $this -> value = $length * $width * $height;
        return $this->value;
    }
}
class Ship extends TypesShip {
    public function ValueForShip($length,$width,$height){
        parent::setValue($length,$width,$height);
        return $this->value;
    }
}
class SpaceShip extends TypesShip {
    public function ValueForSpaceShip($length,$width,$height){
        parent::setValue($length,$width,$height);
        return $this->value;
    }
}
$object = new Ship();
echo "Ship is swimming now.Value:\n ". $object ->ValueForShip(2,2,8)."<br>";
$object = new SpaceShip();
echo "Space ship is flying now.Value:\n ". $object ->ValueForSpaceShip(3,2,2);


