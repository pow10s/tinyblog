<?php
class Counter {
    public function classCounter(){
        static $counter=0;
        $counter++;
        return $counter;
    }
}
$object=new Counter();
$object2= new Counter();
echo $object->classCounter();
