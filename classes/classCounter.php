<?php
class Counter {
   static public function classCounter(){
        static $counter=0;
        $counter++;
        return $counter;
    }
}
echo Counter::classCounter();
echo Counter::classCounter();
