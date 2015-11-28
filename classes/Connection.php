<?php
require 'data.inc';

/**
 * Class Connection
 */
class Connection extends mysqli
{

	private $connection;

	/**
	 * Connection constructor.
	 */
	function __construct()
	{
		$this->connection = parent::__construct(SERVER,OPERATOR,PASSWORD,DATABASE);
	}

	/**
	 * @param $query
	 * @return bool|mysqli_result
	 */
	public function select($query)
	{
		return $this->query($query);
	}

}

/*$c = new Connection();
$q = "select * from Users";
print_r($c->select($q));*/


?>
