<?php
class TypesShip {
    protected $length;
    protected $width;
    protected $height;
    public function getLength () {
        return $this -> length;
    }
    public function getWidth () {
        return $this -> width;
    }
    public function getHeight () {
        return $this -> height;
    }
    public function setLength ($length){
        $this->length = $length;
    }
    public function setWidth($width) {
        $this->width=$width;
    }
    public function setHeight($height) {
        $this->height=$height;
    }

    public function volumeOfShip (){
       return $this -> height * $this -> width * $this -> length;
    }
    public function __construct($length,$width,$height){
        $this->height=$height;
        $this->length=$length;
        $this->width=$width;
    }
}
class Ship extends TypesShip {

}
class SpaceShip extends TypesShip {

}
$object = new Ship(1,2,4);
//$object->setHeight(1);
//$object->setLength(2);
//$object->setWidth(3);
echo $object->volumeOfShip();




