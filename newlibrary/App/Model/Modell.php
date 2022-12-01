<?php

namespace newlibrary\App\Model;
use newlibrary\App\Config\Database;
class Modell extends Database
{

    public function findemail($username){
        $statement = self::$conn->prepare("SELECT * FROM librarian WHERE username = :username");
        $statement->execute(['username'=>$username]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }
 
    

    // }
    
  

   
}


?>