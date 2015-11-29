<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 28/11/15
 * Time: 17:49
 */
interface InsertTask {
    public function exec($sentence, $arguments);
}