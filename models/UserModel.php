<?php
namespace models;

class UserModel extends \libs\DBModel
{
   public function  addUser($params)
   {
        $this->add('users',$params);
   }

    public function deleteUser($params,$count = 1)
    {
        $this->delete('users',$params,$count);
    }

    public function selectUser($params, $count=1)
    {
        $this->select('users',$params,$count);
    }
}