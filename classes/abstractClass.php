<?php
abstract class Figure {
    protected $coordX;
    protected $coordY;
    abstract public function viewCoords();
    abstract public function moveFigure();
    abstract public function scale();
    abstract  public function squareShape();

}
class ActionOnFigure extends Figure {
    protected $scale;
    protected $moveFigureX;
    protected $moveFigureY;
    public function __construct($coordX,$coordY,$scale,$moveFigureX,$moveFigureY){
        $this->coordX=$coordX;
        $this->coordY=$coordY;
        $this->scale=$scale;
        $this->moveFigureX=$moveFigureX;
        $this->moveFigureY=$moveFigureY;
    }
    public function viewCoords(){
        echo "X: ", $this->coordX, "Y: ", $this->coordY;
    }
    public function moveFigure(){
        echo $this->coordX + $this->moveFigureX;
        echo $this->coordY + $this->moveFigureY;
    }
    public function scale(){
        echo $this->coordX * $this->scale;
        echo $this->coordY * $this->scale;
    }
    public function squareShape(){
        echo $this->coordX * $this->coordY;
    }
}
class Rectangle extends ActionOnFigure{

}
class Triangle extends ActionOnFigure{

}
class Round extends ActionOnFigure{

}


