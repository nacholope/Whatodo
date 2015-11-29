<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 2:02
 */
class Delete implements Command
{
    private $tasks;
    public function __construct(){
        $this->add(new DeletetUser());
        $this->add(new DeleteCategory());
    }
    public function add($task){$this->tasks[] = $task;}

    public function run($task, $arguments){
        foreach($this->tasks as $tsk){
            if($tsk->exec($task, $arguments)) return;
        }
    }
}