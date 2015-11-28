<?php
require 'data.inc';
	class Connection extends mysqli{
	private $connection;
	function __construct(){
		$this->connection = parent::__construct(SERVER,OPERATOR,PASSWORD,DATABASE);
	}
	public function select($query){
		return $this->query($query);
	}
}

/*$c = new Connection();
$q = "select * from Users";
print_r($c->select($q));*/


?>
