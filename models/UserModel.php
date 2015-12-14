<?php
namespace models;

class UserModel extends \libs\DBModel
{
    public function addUser($params)
    {
        $this->add('users', $params);
    }

    public function deleteUser($params, $count = 1)
    {
        $this->delete('users', $params, $count);
    }

    public function selectUser($columnName, $tableData = null, $params = null)
    {
        return $this->select('users', $columnName, $tableData, $params);
    }

    public function isUserExist($columnName, $tableData = null, $params = null,$comparableItem)
    {
        $result = $this->select('users', $columnName, $tableData, $params);
        foreach($result as $keys =>$value)
        {
            foreach($value as $key => $val)
            {
                if($val == $comparableItem){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
}