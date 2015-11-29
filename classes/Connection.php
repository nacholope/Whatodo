<?php
require_once 'data.inc';
require_once 'Command.php';
require_once 'TaskInsert.php';
require_once 'Inserts.php';

class Insert implements Command
{
    private $tasks;
    public function __construct(){
        $this->add(new InsertUser());
        $this->add(new InsertCategory());
    }
    public function add($task){$this->tasks[] = $task;}

    public function run($task, $arguments){
        foreach($this->tasks as $tsk){
            if($tsk->exec($task, $arguments)) return;
        }
    }
}


class Connection extends mysqli
{
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
        $insert = new Insert(Connection::get());
        $insert->run($task, $arguments);

/*        $query = "insert into $task values ($arguments)";
        echo $query;
        return $this->query($query);*/
    }
    /**
     * DELETE
     * @param $table
     * @param $condition
     * @return bool|mysqli_result
     */
    public function delete($table, $condition){
        $query = "delete from $table where $condition";
            return $this->query($query);
    }
    /**
     * UPDATE
     * @param $table
     * @param $values
     * @param $condition
     * @return bool|mysqli_result
     */
    public function update($table, $values, $condition){
        $query = "update $table $values where $condition";
        return $this->query($query);
    }








}



$c = Connection::get();
//$q = "select * from Users";
//print_r($c->select($q));

$c->insert("user", ["name"=>'test', "surname"=>'test', "password"=>'test', "email"=>'test@test.es']);

//print_r($c->insert("Users (`name`, surname, `password`, email)","'menorquin', 'llinatge', 'password', 'menorquin@llinatge.es'"));




?>
