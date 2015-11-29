<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 28/11/15
 * Time: 18:14
 */

class InsertUser implements TaskInsert {
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments){
        if ($command != "user"){return false;}
        else {
//            echo count($arguments);
//            print_r($arguments);
            $table = array_values($arguments);
            $this->query = "insert into Users (`name`, surname, `password`, email) values (";
                for ($i = 0; $i < count($table); $i++){
                    if($i == count($table)-1){
                        $this->query .= "$table[$i]";
                    }
                    else{
                        $this->query .= "$table[$i],";
                    }
                }
            $this->query .= ");";
//            print_r($this->connection);
            print_r($this->connection);
//            $this->connection->query($this->query);
            print_r($this->query);
        }
    }
}
class InsertCategory implements TaskInsert {
    public function exec($command, $arguments){
        if ($command != "category"){return false;}
        else {
            echo "insert one category";
            print_r($arguments);
        }
    }
}
