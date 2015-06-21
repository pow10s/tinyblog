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
    function __construct($internationalDistance){
        parent::__construct(1,2);
        $this->internationalDistance=$internationalDistance;
    }
    function internationalDistance(){
        return $this->numberOfItems * ($this->localDistance * 0.8 + $this->internationalDistance * 1.2);
    }
}
$object=new InternationalShipping(3);
echo $object->internationalDistance();