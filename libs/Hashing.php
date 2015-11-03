<?php
namespace libs;

class Hashing
{
    private $salt;

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt=$salt;
    }

    public function hash($password)
    {
        $pass = sha1(md5($password).$this->salt);
        return $pass;
    }

}