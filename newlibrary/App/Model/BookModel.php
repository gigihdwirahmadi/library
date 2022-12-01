<?php

namespace newlibrary\App\Model;
use newlibrary\App\Config\Database;
class BookModel extends Database
{
    public function all()
    {
        $statement = self::$conn->prepare("select * from book");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }
    public function insert($data){
        {
            $statement = self::$conn->prepare("INSERT INTO book(isbn, title, synopsis, author, publisher, category, language) 
            values (:isbn, :title, :synopsis, :author, :publisher, :category, :language)");
            return $statement->execute($data);
            
        }
}
    public function find($id)
    {
        $statement = self::$conn->prepare("SELECT * from book where id=$id");
        $statement->execute();
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
    public function update($data)
    {
        $statement = self::$conn->prepare("UPDATE book set isbn=:isbn, title=:title, synopsis=:synopsis, author=:author, publisher=:publisher, category=:category, language=:language where id=:id");
        return $statement->execute($data);
    }
    public function delete($id){

        $statement = self::$conn->prepare("DELETE from book where id =:id");
        return $statement->execute(['id'=> $id]);
    }
}