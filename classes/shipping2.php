<?php
abstract class Shipping {
    private $_itemsCount;
    private $_distance;

    public function __construct($itemsCount, $distance)
    {
        $this->_itemsCount = $itemsCount;
        $this->_distance = $distance;
    }

    abstract public function getFees();

    public function getDistance()
    {
        return $this->_distance;
    }

    public function getItemsCount()
    {
        return $this->_itemsCount;
    }
}
class InternationalShipping extends Shipping {
    private $internationalDistance;
    public function setInternationalDistance(){
        return $this->internationalDistance;
    }
    public function __construct($internationalDistance){
        parent::__construct(1,2);
        $this->internationalDistance=$internationalDistance;
    }
    public function get_itemsCount(){
        $this->getItemsCount();
    }
    public function get_distance(){
        $this->getDistance();
    }
    public function getFees(){
        return $this->get_itemsCount() * ($this->get_distance() * 0.8 + $this->internationalDistance * 1.2);
    }

}

class LocalShipping extends Shipping {
    public function get_itemsCount(){
        $this->getItemsCount();
    }
    public function get_distance(){
        $this->getDistance();
    }
    public function getFees(){
        return $this->get_distance() * $this->get_itemsCount() * 0.8;
    }
}

