<?php

namespace newlibrary\App\Model;
use newlibrary\App\Config\Database;
class SubscriptionModel extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from subscription");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
           
            $statement = self::$conn->prepare("INSERT INTO subscription(title, month, price, is_active) 
            values (:title, :month, :price, :is_active)");
            return $statement->execute($data);
        }
}
    public function find($id)
    {
        $statement = self::$conn->prepare("SELECT * from subscription where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE subscription set title=:title, month=:month, price=:price, is_active=:is_active where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from subscription where id =:id");
        return $statement->execute(['id'=> $id]);
    }
}