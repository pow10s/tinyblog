<?php
namespace models;
class TestFileModels{
    public function hello(){
        echo 'HELLO2222';
    }
}
$obj= new TestFileModels();
$obj->hello();