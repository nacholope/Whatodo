<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 13:26
 */
class UpdateEvent implements UpdateTask
{
    private $connection;
    private $query = "";
    public function __construct(){
        $this->connection = Connection::get();
    }
    public function exec($command, $arguments, $conditions){
//        print_r($conditions);
        if ($command != "event"){return false;}
        else {
            $args = array_values($arguments);
            $keysArguments = array_keys($arguments);
            $keysConditions = array_keys($conditions);
            $cons = array_values($conditions);
            $this->query = "update Events set ";
            for ($i = 0; $i < count($args); $i++){
                if($i == count($args)-1){
                    $this->query .= "$keysArguments[$i] = '$args[$i]'";
                }
                else{
                    $this->query .= "$keysArguments[$i] = '$args[$i]', ";
                }
            }
            $this->query .= " where ";
            for ($i = 0; $i < count($cons); $i++){
                if($i == count($cons)-1){
                    $this->query .= "$keysConditions[$i] = '$cons[$i]'";
                }
                else{
                    $this->query .= "$keysConditions[$i] = '$cons[$i]' and";
                }
            }
            $this->query .= ";";
//            print_r($this->query);
            return $this->connection->query($this->query);
        }
    }
}