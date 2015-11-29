<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 2:01
 */

class Insert implements Command
{
    private $tasks;
    public function __construct(){
        $this->add(new InsertTaskUser());
        $this->add(new InsertTaskCategory());
    }
    public function add($task){$this->tasks[] = $task;}

    public function run($task, $arguments){
        foreach($this->tasks as $tsk){
            if($tsk->exec($task, $arguments)) return;
        }
    }
}