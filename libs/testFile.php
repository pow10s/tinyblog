<?php
namespace libs;
class TestFile{
    public function hello(){
        echo 'HELLO';
    }
}
$obj = new TestFile();
$obj->hello();