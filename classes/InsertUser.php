<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 2:26
 */
class InsertUser implements InsertTask {
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments){
        if ($command != "user"){return false;}
        else {
            $table = array_values($arguments);
            $this->query = "insert into Users (`name`, surname, `password`, email) values (";
            for ($i = 0; $i < count($table); $i++){
                if($i == count($table)-1){
                    $this->query .= "'$table[$i]'";
                }
                else{
                    $this->query .= "'$table[$i]',";
                }
            }
            $this->query .= ");";
            return $this->connection->query($this->query);
        }
    }
}