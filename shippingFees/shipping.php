<?php
class LocalShipping {
    protected $numberOfItems;
    protected $localDistance;
    function setNumberOfItems(){
        return $this->numberOfItems;
    }
    function setLocalDistance(){
        return $this->localDistance;
    }
    function __construct($numberOfItems,$localDistance){
        $this->numberOfItems = $numberOfItems;
        $this->localDistance = $localDistance;
    }
    function localDistance(){
        return $this->localDistance * $this->numberOfItems * 0.8;
    }
}
class InternationalShipping extends LocalShipping{
    protected $internationalDistance;

    function setInternationalDistance(){
        return $this->internationalDistance;
    }
    function getInternationalDistance($internationalDistance){
         $this->internationalDistance=$internationalDistance;
    }
    function interDistance(){
        return $this->numberOfItems * ($this->localDistance * 0.8 + $this->internationalDistance * 1.2);
    }
}
