<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 28/11/15
 * Time: 17:46
 */
interface Command {
    public function add($task);
    public function run($task, $arguments);
}