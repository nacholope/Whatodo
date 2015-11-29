<?php

/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 12:03
 */
interface UpdateTask
{
    public function exec($sentence, $arguments, $conditions);
}