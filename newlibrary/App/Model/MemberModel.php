<?php

namespace newlibrary\App\Model;
use newlibrary\App\Config\Database;
class MemberModel extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from member");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data)
        {
            $statement = self::$conn->prepare("INSERT INTO member(nik, full_name, phone, addres, born_place, born_date, gender, country, nationality, is_active)
            values (:nik,:full_name,:phone,:addres,:born_place,:born_date,:gender,:country,:nationality,:is_active)");

            return $statement->execute($data);
        }

    public function find($id)
    {
        $statement = self::$conn->prepare("SELECT * from member where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE member set nik=:nik, fullname=:fullname, phone=:fullname, addres=:addres, born_place=:born_place, born_date=:born_date, gender=:gender, country=:country, nationality=:nationality, is_active=:is_active");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from member where id =:id");
        return $statement->execute(['id'=> $id]);
    }
}