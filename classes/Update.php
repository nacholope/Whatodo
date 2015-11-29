<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 2:03
 */
class Update implements Command
{
    private $tasks;
    public function __construct(){
        $this->add(new UpdateUser());
        $this->add(new UpdateCategory());
    }
    public function add($task){$this->tasks[] = $task;}

    public function run($task, $arguments, $conditions){
        foreach($this->tasks as $tsk){
            if($tsk->exec($task, $arguments, $conditions)) return true;
        }
        return false;
    }
}