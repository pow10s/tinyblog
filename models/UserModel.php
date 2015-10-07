<?php
namespace models;

class UserModel extends \libs\DBModel
{
   public function  addUser($params)
   {
        $this->add('users',$params);
   }
}