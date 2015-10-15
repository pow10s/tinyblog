<?php
namespace libs;

class Hashing
{
    public function hash($password){
       $result =  crypt($password);
       return $result;
    }
    public function chackHash($password){
        $pass_hash = crypt($password);
        if(crypt($password, $pass_hash) == $pass_hash) {
             echo 'already used';
        }
    }
}