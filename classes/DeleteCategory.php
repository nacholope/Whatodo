<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 2:50
 */
class DeleteCategory implements DeleteTask {
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments){
        if ($command != "category"){return false;}
        else {
            $args = array_values($arguments);
            $keysArguments = array_keys($arguments);
            $this->query = "delete from Categories where ";
            for ($i = 0; $i < count($args); $i++){
                if($i == count($args)-1){
                    $this->query .= "$keysArguments[$i] = '$args[$i]'";
                }
                else{
                    $this->query .= "$keysArguments[$i] = '$args[$i]' and ";
                }
            }
            $this->query .= ";";
            return $this->connection->query($this->query);
        }
    }
}