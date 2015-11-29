<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 28/11/15
 * Time: 18:14
 */

class InsertTaskCategory implements InsertTask {
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments){
        if ($command != "category"){return false;}
        else {
            $table = array_values($arguments);
            //TODO: make sentence
            $this->query = "";
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
