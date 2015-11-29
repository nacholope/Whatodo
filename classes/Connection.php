<?php
require_once 'data.inc';
require_once 'Command.php';
require_once 'InsertTask.php';
require_once 'UpdateTask.php';
require_once 'Insert.php';
require_once 'Delete.php';
require_once 'Update.php';
require_once 'InsertCategory.php';
require_once 'InsertEvent.php';
require_once 'InsertUser.php';
require_once 'DeleteUser.php';
require_once 'DeleteCategory.php';
require_once 'UpdateCategory.php';
require_once 'UpdateUser.php';


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
     * @param $conditions
     * @return bool
     */
    public function insert($task, $arguments, $conditions)
    {
        $insert = new Insert();
        return $insert->run($task, $arguments, $conditions);
    }

    /**
     * DELETE
     * @param $task
     * @param $arguments
     * @param $conditions
     * @return bool|mysqli_result
     */
    public function delete($task, $arguments, $conditions){
        //TODO: delete
        $delete = new Delete();
        return $delete->run($task, $arguments, $conditions);
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
        return $update->run($task, $values, $condition);
/*        $query = "update $task $values where $condition";
        return $this->query($query);*/
    }
}