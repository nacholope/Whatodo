<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 28/11/15
 * Time: 18:14
 */

class InsertCategory implements InsertTask {
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments){
        if ($command != "category"){return false;}
        else {
            $table = array_values($arguments);
            $this->query = "insert into Categories (`name`) values (";
            for ($i = 0; $i < count($table); $i++){
                if($i == count($table)-1){
                    $this->query .= "'$table[$i]'";
                }
                else{
                    $this->query .= "'$table[$i]',";
                }
            }
            $this->query .= ");";
//            print_r($this->connection);
            return $this->connection->query($this->query);
        }
    }
}
