<?php
require_once 'data.inc';
require_once 'Command.php';
require_once 'InsertTask.php';
require_once 'InsertCategory.php';
require_once 'InsertEvent.php';
require_once 'InsertUser.php';
require_once 'DeleteUser.php';
require_once 'DeleteCategory.php';
require_once 'UpdateCategory.php';
require_once 'UpdateUser.php';
require_once 'Insert.php';
require_once 'Delete.php';
require_once 'Update.php';

class Connection extends mysqli{
    private function __construct()
    {
        parent::__construct(SERVER, OPERATOR, PASSWORD, DATABASE);
    }

    /**
     * SINGLETON
     * @return Connection
     */
    static function get()
    {
        static $connection = null;
        if ($connection == null) {
            $connection = new Connection();
        }
        return $connection;
    }

    /**
     * SELECT
     * @param $query
     * @return bool|mysqli_result
     */
    public function select($query)
    {
        return $this->query($query);
    }
    /**
     * INSERT
     * @param $task
     * @param $arguments
     * @return bool|mysqli_result
     */
    public function insert($task, $arguments)
    {
        $insert = new Insert();
        return $insert->run($task, $arguments);
    }
    /**
     * DELETE
     * @param $task
     * @param $arguments
     * @return bool|mysqli_result
     */
    public function delete($task, $arguments){
        //TODO: delete
        $delete = new Delete();
        $delete->run($task, $arguments);
/*        $query = "delete from $table where $condition";
            return $this->query($query);*/
    }
    /**
     * UPDATE
     * @param $task
     * @param $values
     * @param $condition
     * @return bool|mysqli_result
     */
    public function update($task, $values, $condition){
        //TODO: update
        $update = new Update();
        $update->run($task, $values, $condition);
        $query = "update $task $values where $condition";
        return $this->query($query);
    }
}