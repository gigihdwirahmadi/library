<?php

namespace newlibrary\App\Model;
use newlibrary\App\Config\Database;
class LibrarianModel extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from librarian");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO librarian(name, username, avatar, email,password) 
            values (:name,:username, :avatar,:email,:password)");
            return $statement->execute($data);
        }
}
    public function find($id)
    {
        $statement = self::$conn->prepare("SELECT * from librarian where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE librarian set name= :name, username=:username, email=:email, password=:password, avatar=:avatar where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from librarian where id =:id");
        return $statement->execute(['id'=> $id]);
    }
}