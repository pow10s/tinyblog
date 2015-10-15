<?php
namespace libs;

class Hashing
{
    private $salt;

    public function get()
    {
        return $this->salt;
    }

    public function set($salt)
    {
        $this->salt=$salt;
    }

    public function hash($password)
    {
        $pass = sha1(md5($password).$this->salt);
        return $pass;
    }

}